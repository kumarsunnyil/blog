<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        ContactUS::create($request->all());

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message'  )
            ), function($message) use ($request)
            {
                //$message->from('smita.shashi@gmail.com');
                $message->from($request->get('email'));
                $message->to('kumar.sunnyil@gmail.com', 'Admin')->subject('Enquiry Form');
            });

        return back()->with('success', 'Thanks for contacting us!');
    }

}
