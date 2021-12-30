<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Volunteers;

class VolunteersController extends Controller
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
        $volunteers = Volunteers::all();
        return view('admin.volunteers.index')->with(['volunteers' => $volunteers]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.volunteers.add');
    }

    /**
    * Edit volunteers action
    */
    public function edit($id)
    {
      $userId = \Auth::user()->id;

      if ($userId != $id) {
        //redirect to add page
        return redirect('/admin/volunteers')->with('success','Sorry, You can not update this volunteer information');
      }
      $userId = $id ? $id : \Auth::user()->id;
      $volunteer = Volunteers::where('id', '=', $userId)->get()->first();
      return view('admin.volunteers.edit')->with(['volunteer' => $volunteer]);
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
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:volunteers,email',
        'dob' => 'required',
        'contact_number' => 'required|unique:volunteers,contact_number',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      //process profile image
      $profileImg = request('profile_image');
      $filename = null;
      if($profileImg) {
          $filename  = time() . '.' . $profileImg->getClientOriginalExtension();
          $path = public_path('images/profileimages/' . $filename);
          $destinationPath = public_path('/images/profileimages/');
          $profileImg->move($destinationPath, $filename);
       }
      //insert to tabel
      Volunteers::create([
        'first_name' =>request('first_name'),
        'last_name' =>request('last_name'),
        'dob' => date("Y-m-d", strtotime(request('dob'))),
        'gender' =>request('gender'),
        'profile_image' => $filename,
        'contact_number' =>request('contact_number'),
        'email' =>request('email'),
        'blood_group' =>request('blood_group'),
        'hobbies' =>request('hobbies'),
        'address' =>request('address'),
        'city' =>request('city'),
        'state' =>request('state'),
        'about' => request('about'),
        'about_volunteerism' => request('about_volunteerism'),
        'how_you_contribute' => request('how_you_contribute'),
        'facebook_id' =>request('facebook_id'),
        'skype_id' =>request('skype_id'),
        'google_plus_id' =>request('google_plus_id'),
        'whatsapp_number' =>request('whatsapp_number'),
        'is_admin' =>request('is_admin'),
        'is_active' =>request('is_active'),
        'is_visible' =>request('is_visible'),
        'share_whatsapp_number' =>request('share_whatsapp_number'),
        'share_facebook_id' =>request('share_facebook_id'),
        'share_skype_id' =>request('share_skype_id'),
        'share_google_plus_id' =>request('share_google_plus_id')
      ]);

      //redirect to add page
      return redirect('/admin/volunteer/add')->with('success','Volunteer added successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //validate request input
      $this->validate(request(),[
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:volunteers,email,'.$id,
        'dob' => 'required',
        'contact_number' => 'required|unique:volunteers,contact_number,'.$id,
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      //process profile image
      $profileImg = request('profile_image');
      $filename = null;
      if($profileImg) {
          $filename  = time() . '.' . $profileImg->getClientOriginalExtension();
          $path = public_path('images/profileimages/' . $filename);
          $destinationPath = public_path('/images/profileimages/');
          $profileImg->move($destinationPath, $filename);
       }

        $input = array(
          'first_name' =>request('first_name'),
          'last_name' =>request('last_name'),
          'dob' => date("Y-m-d", strtotime(request('dob'))),
          'gender' =>request('gender'),
          'contact_number' =>request('contact_number'),
          'email' =>request('email'),
          'blood_group' =>request('blood_group'),
          'hobbies' =>request('hobbies'),
          'address' =>request('address'),
          'city' =>request('city'),
          'state' =>request('state'),
          'about' => request('about'),
          'about_volunteerism' => request('about_volunteerism'),
          'how_you_contribute' => request('how_you_contribute'),
          'facebook_id' =>request('facebook_id'),
          'skype_id' =>request('skype_id'),
          'google_plus_id' =>request('google_plus_id'),
          'whatsapp_number' =>request('whatsapp_number'),
          'is_admin' =>request('is_admin'),
          'is_active' =>request('is_active'),
          'is_visible' =>request('is_visible'),
          'share_whatsapp_number' =>request('share_whatsapp_number'),
          'share_facebook_id' =>request('share_facebook_id'),
          'share_skype_id' =>request('share_skype_id'),
          'share_google_plus_id' =>request('share_google_plus_id')
        );
        if ($filename!== null) {
        $input['profile_image'] = $filename;
      }
        $volunteer = Volunteers::findOrFail($id);
        $volunteer->update($input);
        //redirect to add page
        return redirect('/admin/volunteers')->with('success','Volunteer updated successfully!');
    }

    /**
    * Edit volunteers action
    */
    public function resetpassword($id)
    {
      $userId = \Auth::user()->id;

      if ($userId != $id) {
        //redirect to add page
        return redirect('/admin/volunteers')->with('success','Sorry, You can not reset password for this volunteer');
      }
      return view('admin.volunteers.resetpassword')->with(['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request, $id)
    {
      //validate request input
      $this->validate(request(),[
        'password'          =>  'required|min:8',
        'confirmed'   =>  'required|same:password',
      ]);
        $input = array(
          'password' => bcrypt(request('password'))
        );
        $volunteer = Volunteers::findOrFail($id);
        $volunteer->update($input);
        //redirect to add page
        return redirect('/admin/volunteers')->with('success','Volunteer updated successfully!');
    }
}
