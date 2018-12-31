<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\portfolio;

class iaburcontroller extends Controller
{
    //
   public function save_message(Request $req)
     {
        
        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $message = $req->input('message');

        $data = array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message);
        DB::table('portfolios')->insert($data);
        echo "successfully posted your message";
        return redirect('/');

    }
    public function view_message() {
    	$message = portfolio::all();
    	return view('message',['message'=>$message]);
    }
}
