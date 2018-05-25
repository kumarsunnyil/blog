<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index(){
        //
        echo "this is the first index in post" ;
        exit;
    }

    public function getPost(){


        if (Auth::check()) {
            // The user is logged in...

            return view('postsdisplay');
            //echo "User is logged in";
        }else{
            //redirect()->guest(route('login'));
            //echo "User is Not logged in";
            return redirect('/login');
        }
    }
}
