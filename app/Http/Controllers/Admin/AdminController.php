<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Nomination;
use App\Models\Volunteers;
use App\Models\Voting;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
      $userData = DB::select('SELECT (
          SELECT count(`id`) FROM `volunteers` WHERE 1
         ) AS volunteersCnt,
        (
          SELECT count(`id`) FROM volunteers WHERE
            MONTH(`dob`) = MONTH(CURDATE())) AS bithCntOfMonth
      FROM dual');

      $volunteers = DB::table('volunteers')
              ->select('id','gender','profile_image','email','dob','contact_number', DB::raw("CONCAT(first_name, ' ', last_name) as name"))
              ->whereMonth('dob', date('m'))
              ->whereDay('dob', '>=', date('d'))
              ->orderByRaw('DAY(dob)')
              ->limit(5)
              ->get();

      return view('admin.index', ['userData' => $userData[0], 'volunteers' => $volunteers, 'userId' => \Auth::user()->id]);
    }
}
