@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/contact.css">
@endsection

@section('page-title')
<title>Trader Toks | Contact Me</title>
@endsection

@section('content')
<div class="background">
    <img src="images/logo/Logo0.2.svg">
    <img src="images/logo/Logo0.2.svg">
    <img src="images/logo/Logo0.2.svg">
    <img src="images/logo/Logo0.2.svg">
</div>
<div class="contact">
            <div class="section-title">
                <h1>
                    Do you have any questions?
                </h1>
            </div>
            <div class="container">
                <div class="mid">
                    <form>
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
                            <textarea name="message" placeholder="Write your message!" required></textarea>
                        </div>
                        <button type="submit" href="#" class="btn">Send it my way!</button>
                    </form>
                </div>
            </div>              
        </div>

@endsection