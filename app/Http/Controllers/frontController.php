<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
class frontController extends Controller
{
    public function index(Request $request){
    	
    	return view('front.home.homeContent');
    }
    public function add(){
    	return view('front.adduser');

    }
}
