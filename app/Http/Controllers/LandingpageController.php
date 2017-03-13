<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LandingpageController extends Controller
{
    function index(){
    	return view('Landingpage');
    }
}
