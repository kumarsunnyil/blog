<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        //
        echo "this is the first index in post" ;
        exit;
    }

    public function getPost(){


        echo "Get Post" ;
    }
}
