<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function store(Request $request)
    {
        //$email = request('email');

        if (! Newsletter::isSubscribed($request->email)) 
        {
            Newsletter::subscribe($request->email);
            return back()->with('successMail', 'You joined the troops! Check your email!');
        }

        return back()->with('failureMail', 'You are already subbed.');
    }
}
