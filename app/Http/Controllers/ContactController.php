<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function contact(Request $request)
    {
        request()->validate
        (
            [   
                'name' => 'required|min:3',
                'email' => 'required|email',
                'message' => 'required|min:30',
            ]
        );

        Mail::to('info@tradertoks.com')
            ->send(new ContactMail(request('message')));
    }
}
