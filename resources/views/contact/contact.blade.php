@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/contact.css">
@endsection

@section('page-title')
<title>Trader Toks | Contact Me</title>
@endsection

@section('content')

<div class="contact">
            <div class="section-title">
                <h1>
                    Do you have any questions?
                </h1>
            </div>
            <div class="container">
                <div class="img-left">
                    <img src="images/logo/Logo.svg">
                </div>   
                <div class="mid">
                    <form method="POST" action="/booking">
                    <div class="row">
                        <div class="input-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="input-group">    
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Your email" required>
                        </div>
                    </div>
                        <div class="input-group">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="input-group">
                            <label for="message">Message:</label>
                            <textarea name="message" required> Write your message!
                            </textarea>
                        </div>
                        <button type="submit" href="#" class="btn">Send it my way!</button>
                    </div> 
                </form>
                <div class="img-right">
                    <img src="images/logo/Logo.svg">
                </div>
                </div>

            </div>              
        </div>

@endsection