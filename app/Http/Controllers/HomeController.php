<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        $ambulances = DB::table('ambulances')->select('plateNumber')->where('status','=','inservice')->get();
        $locations=DB::table('locations')->select('descr')->where('is_hospital','=',1)->get();
    
        return view('home', ['ambulances' => $ambulances,'locations'=>$locations]);  
    }
}
