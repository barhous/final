<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class getAmbulances extends Controller
{
    public function index() {
       
    $ambulances = DB::table('ambulance')->select('plateNumber')->where('status','=','inservice')->get();

    return view('home', ['ambulance' => $ambulances]);
     }
}
