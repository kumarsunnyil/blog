<?php

namespace App\Http\Controllers;

//use Cornford\Googlmapper\Mapper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        Mapper::map(53.381128999999990000, -1.470085000000040000);

        //return view('map')
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
