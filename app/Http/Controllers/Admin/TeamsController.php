<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teams;
use App\Models\Volunteers;
use App\Models\Volunteerteam;

class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $teams = Teams::query()
        ->select(
          'teams.id',
          'teams.name',
          'teams.is_active',
          DB::raw('CONCAT(volunteers.first_name, " ", volunteers.last_name) AS createdBy'),
          DB::raw('LEFT(teams.description, 50) AS description')
        )
        ->leftjoin('volunteers','volunteers.id', '=', 'teams.created_by')
        ->get();
        return view('admin.teams.index')->with(['teams' => $teams]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $volunteers = Volunteers::query()
          ->select(
            'volunteers.id',
            DB::raw('CONCAT(volunteers.first_name, " ", volunteers.last_name) AS name')
          )
          ->where('is_active', '=', 'Y')
          ->orderBy('volunteers.first_name', 'ASC')
          ->get();
        $team = array();
        $team['member'] = array();
        $team['lead'] =array();
        $parentTeam = Teams::where('parent_id', '=', 0)
          ->where('is_active', '=', 'Y')
          ->get()
          ->pluck('name', 'id')
          ->toArray();

        return view('admin.teams.add')->with([
          'team' => $team,
          'volunteers' => $volunteers,
          'canEdit' => 'Y',
          'userId' => \Auth::user()->id,
          'parentTeam' => (array('' => 'None') + $parentTeam)
        ]);
    }

    /**
    * Edit teams action
    */
    public function edit($teamId)
    {
      $team = Teams::where('id', '=', $teamId)
      ->get()
      ->first();
      $volunteers = Volunteers::query()
        ->select(
          'volunteers.id',
          DB::raw('CONCAT(volunteers.first_name, " ", volunteers.last_name) AS name')
        )
        ->where('is_active', '=', 'Y')
        ->orderBy('volunteers.first_name', 'ASC')
        ->get();

      $member = array();
      $lead =  array();
      $userId = \Auth::user()->id;

      $canEdit = ($team['created_by'] ===  $userId ? 'Y' : 'N');
      $teammembers = Volunteerteam::where('team_id', '=', $teamId)
        ->get(['volunteer_id', 'is_teamlead']);

      if(!$teammembers->isEmpty()) {
          $teammembers = $teammembers->toArray();
          foreach ($teammembers as $key => $value) {
            array_push($member, $value['volunteer_id']);
            if ('Y' === $value['is_teamlead']) {
              array_push($lead, $value['volunteer_id']);
              if ($userId == $value['volunteer_id']) {
                $canEdit = 'Y';
              }
            }
          }
      }
      $team['member'] = $member;
      $team['lead'] = $lead;
      $parentTeam = Teams::where('parent_id', '=', 0)
        ->where('is_active', '=', 'Y')
        ->where('id', '<>', $teamId)
        ->get()
        ->pluck('name', 'id')
        ->toArray();
      return view('admin.teams.edit')->with([
        'team' => $team,
        'volunteers' => $volunteers,
        'canEdit' => $canEdit,
        'userId' => \Auth::user()->id,
        'parentTeam' => (array('' => 'None') + $parentTeam)
      ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      //validate request input
      $this->validate(request(),[
        'name'        => 'required|unique:teams,name',
        'description' => 'required',
      ]);

      //insert to tabel
      $teamId = Teams::create([
        'name'        => request('name'),
        'description' => request('description'),
        'parent_id'   => request('parent_id'),
        'is_active'   => request('is_active'),
        'created_by'  => \Auth::user()->id
      ])->id;

      if ($teamId) {
        if(request('team')) {
          $members = array();
          foreach (request('team') as $volunteerId) {
            array_push($members, array(
                'volunteer_id' => $volunteerId,
                'team_id' => $teamId
              )
            );
          }
          //insert to tabel
          Volunteerteam::insert($members);
        }
        //redirect to add page
        return redirect('/admin/team/add')->with('success','Team added successfully!');
      }
      //redirect to add page
      return redirect('/admin/team/add')->with('danger','Something went wrong, please try again!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teamId)
    {
      //validate request input
      $this->validate(request(),[
        'name'        => 'required|unique:teams,name,'.$teamId,
        'description' => 'required',
      ]);

      $input = array(
        'name' =>request('name'),
        'description' => request('description'),
        'parent_id'   => request('parent_id'),
        'is_active'   => request('is_active')
      );
      $team = Teams::findOrFail($teamId);
      $team->update($input);

      $members = array();
      if(request('team')) {
      foreach (request('team') as $volunteerId) {
        array_push($members, array(
            'volunteer_id' => $volunteerId,
            'team_id' => $teamId,
            'is_teamlead' => is_array(request('lead')) && in_array($volunteerId, request('lead')) ? 'Y' : 'N'
          )
        );
      }
      //remove existing record first
      Volunteerteam::where('team_id', '=', $teamId)->delete();
      //insert to tabel
      Volunteerteam::insert($members);
    }
      //redirect to add page
      return redirect('/admin/teams')->with('success','Team updated successfully!');
    }

    /**
    * Edit teams action
    */
    public function myTeams()
    {
      $userId = \Auth::user()->id;
      $data = Volunteerteam::query()
        ->select(
            't.id',
            't.name',
            't.description',
            't.is_active',
            't1.name AS parent_team',
            'v.id as volunteer_id',
            'v.gender',
            'v.profile_image',
            DB::raw('CONCAT(v.first_name, " ", v.last_name) AS team_member'),
            'vt.is_teamlead'
        )
        ->leftjoin('teams AS t','t.id', '=', 'volunteer_team.team_id')
        ->leftjoin('volunteer_team AS vt','vt.team_id', '=', 't.id')
        ->leftjoin('volunteers AS v','v.id', '=', 'vt.volunteer_id')
        ->leftjoin('teams AS t1','t1.id', '=', 't.parent_id')
        ->where('volunteer_team.volunteer_id', '=', $userId)
        ->get()
        ->toArray();
      $teams = array();
      foreach ($data as $key => $value) {
        $teams[$value['id']]['id'] = $value['id'];
        $teams[$value['id']]['name'] = $value['name'];
        $teams[$value['id']]['description'] = $value['description'];
        $teams[$value['id']]['is_active'] = $value['is_active'];
        $teams[$value['id']]['parent_team'] = $value['parent_team'];
        $member = array (
          'id' => $value['volunteer_id'],
          'name' => $value['team_member'],
          'is_teamlead' => $value['is_teamlead'],
          'profile_image' => ($value['profile_image'] ? '/images/profileimages/'.$value['profile_image'] : '/images/dafault-'.$value['gender'].'.jpg'),
        );
        $teams[$value['id']]['member'][$value['volunteer_id']] = $member;
      }
      return view('admin.teams.my-teams')->with(['teams' => $teams, 'userId' => $userId]);
    }
}
