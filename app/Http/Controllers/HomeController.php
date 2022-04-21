<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
    public function index(){
        
        return view('front.home.homeContent',array('user'=>Auth::user()));
    }
  
      public function calculat(Request $request)
    {
        $sender_email = Auth::user()->email;
        $sender_ac = User::where('email', $sender_email)->first();
        if($sender_ac->useramount > $request->useramount){
            $sender_ac->useramount = $sender_ac->useramount - $request->useramount;
            $taka_send = $sender_ac->save();

            if ($taka_send) {
                $reciver_ac = User::where('email', $request->ac_email)->first();
                $reciver_ac->useramount = $reciver_ac->useramount + $request->useramount;
                $taka_recive = $reciver_ac->save();
            }
            // return "send successfully ";  
            return back();     
        }else{
            return "You do not have suficient balance ";        
        }
        
    }

}
