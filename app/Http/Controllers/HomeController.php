<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function store(Request $request)
    {
        $email = request('email');

        if(! Newsletter::isSubscribed($email))
        {
            Newsletter::subscribe($email);

            return back()->with('successMail', 'You joined the troops! Check your email!');
        }

        return back()->with('failureMail', 'You are already subbed.');
    }
}
