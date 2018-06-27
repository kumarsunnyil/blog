<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  \Redis::set('name', 'Taylor');
        return view('home');
    }

    /**
     * Show the aboutus page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutus()
    {
        return view('about');
    }
}
