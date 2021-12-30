<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Volunteers;

class NotificationsController extends Controller
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
      $month = "IF(MONTH(dob) < MONTH(NOW()), MONTH(dob) + 12, MONTH(dob))";
      $day = "DAY(dob)";
      $volunteersData = Volunteers::query()
        ->select(
          DB::raw('MONTH(volunteers.dob) AS month'),
          'volunteers.email',
          'volunteers.profile_image',
          'volunteers.gender',
          'volunteers.dob',
          DB::raw('DATE_FORMAT(volunteers.dob, "%m-%d") AS dm'),
          DB::raw('CONCAT(volunteers.first_name, " ", volunteers.last_name) AS name')
      )
      ->where('dob', '!=', '0000-00-00')
      ->orderByRaw($month)
      ->orderByRaw($day)
      ->get()
      ->toArray();
      $volunteers = array();
      foreach ($volunteersData as $volunteer) {
        $volunteer['istoday'] = 'N';
        if (date("m-d") == $volunteer['dm']) {
          $volunteer['istoday'] = 'Y';
        }
        $volunteer['profile_image'] = ($volunteer['profile_image'] ? '/images/profileimages/'.$volunteer['profile_image'] : '/images/dafault-'.$volunteer['gender'].'.jpg');
        $volunteers[$volunteer['month']][]  = $volunteer;
      };
      return view('admin.notifications.index')->with(['volunteers' => $volunteers]);
    }
}
