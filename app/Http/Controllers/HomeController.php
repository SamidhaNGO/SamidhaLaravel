<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Volunteers;
use Mail;
use App\Models\Contactus;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function initiatives()
    {
        return view('initiatives');
    }

    /**
     * Show the application samidhians.
     *
     * @return \Illuminate\Http\Response
     */
    public function samidhians()
    {
      $volunteers = Volunteers::all();
      return view('samidhians')->with(['volunteers' => $volunteers]);
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application contactus.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view('contactus');
    }

    /**
     * Show the application services.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('services');
    }

    public function savecontactus(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $msg = $request->input('message');

        //validate request input
        $this->validate(request(),[
          'name' => 'required',
          'phone' => 'required',
          'email' => 'required|email',
          'message' => 'required'
        ]);

        //insert to tabel
        Contactus::create([
          'name' => $name,
          'phone' => $phone,
          'email' => $email,
          'message' => $msg
        ]);

        // send email
        Mail::send('emails.contactus', [
          'name' => $name,
          'phone' => $phone,
          'email' => $email,
          'messageContant' => $msg
        ], function ($message) {
           $message->from('helping2help@samidha.org', 'samidha');
           $message->to('helping2help@samidha.org');
           //Add a subject
            $message->subject('Samidha:Someone trying to contact us!');
        });
        return response()->json(['error' => false, 'message' => 'success']);
    }
}
