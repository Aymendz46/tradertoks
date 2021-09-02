@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/course.css">
@endsection

@section('page-title')
<title>Trader Toks | Course</title>
@endsection

@section('content')

 <!------------------------------>
        <!-- MAIN -->
        <div class="main">
            <img src="./images/logo/THE MW ACADEMY logo.svg" alt="THE MW Academy Course logo" style="filter: drop-shadow(0px 2px 1px rgba(0, 0, 0, 0.25));">
            <div class="container ">
                <div class="cta-div ">
                    <h2>Are you ready to start the course?</h2>
                    <a href="{{ route('purchase') }}" class="cta-btn">YES! Enroll!</a>
                </div>
            </div>            

            <!--div class="left">
                <h3>The popular</h3>
                <img src="images/logo/title.svg " alt="Trader Course ">
            </div>
            <div class="right ">
                <div class="image-bottom ">
                    <img src="images/toks/toks2.png" alt="Trader Toks">
                </div>
                <div class="image-top">
                    <img src="images/toks/toks1.png " alt="Trader Toks ">
                </div>
            </div-->
        </div>

        <!------------------------------>
        <!-- WHO is this course for -->
        <div class="who ">
            <div class="section-title ">
                <h1>
                    The path to become a profitable trader
                </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam magnam a pariatur necessitatibus dicta culpa ea quia dolores similique unde iusto tenetur explicabo, animi, provident consectetur sunt quam dolore? Cupiditate! Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Quibusdam magnam a pariatur necessitatibus dicta culpa ea quia dolores similique unde iusto tenetur explicabo, animi, provident consectetur sunt quam dolore? Cupiditate! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Quibusdam magnam a pariatur necessitatibus dicta culpa ea quia dolores similique unde iusto tenetur explicabo, animi, provident consectetur sunt quam dolore? Cupiditate! Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quibusdam magnam a pariatur necessitatibus dicta culpa ea quia dolores similique unde iusto tenetur explicabo, animi, provident consectetur sunt quam dolore? Cupiditate!
            </p>
        </div>

        <!------------------------------>
        <!-- WHAT DO YOU GET -->
        <div class="what ">
            <div class="section-title ">
                <h1>
                    WHAT DO YOU GET?
                </h1>
            </div>
            <div class="content ">
                <div class="detail dark ">
                    <h3>
                        Part 1
                    </h3>
                    <div class="line "></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit. ea commodo consequat. Duis aute irure dolor in reprehenderit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                        ea commodo consequat. Duis aute irure dolor in reprehenderit.
                    </p>
                </div>
                <div class="image ">
                    <img src="images/product/3-min.png" alt="">
                </div>
                <div class="image">
                    <img src="images/product/2-min.png " alt=" ">
                </div>
                <div class="detail light ">
                    <h3>
                        Part 2
                    </h3>
                    <div class="line "></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit. ea commodo consequat. Duis aute irure dolor in reprehenderit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                        ea commodo consequat. Duis aute irure dolor in reprehenderit.
                    </p>
                </div>
            </div>
        </div>

        <!------------------------------>
        <!-- REVIEWS & TESTIMONIALS -->
        <div class="review ">
            <div class="band ">
                <div class="section-title light ">
                    <h1>
                        REVIEW & TESTIMONIALS
                    </h1>
                </div>
            </div>
            <div class="container">
                <h2>Coming soon.</h2>
            </div>
            <!-- cards
            <div id="review-scroll " class="container ">
                <!-- card 1 
                <div class="card leftt ">
                    <div class="profile-pic ">
                        <img src="images/components/profilepic.svg ">
                    </div>
                    <div class="client_id ">
                        <p>Jervi</p>
                        <img src="images/components/verified_badge.png ">
                    </div>
                    <div class="review ">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ”</p>
                    </div>
                    <div class="rating ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                    </div>
                </div>
                <!-- card 2 
                <div class="card active centerr ">
                    <div class="profile-pic ">
                        <img src="images/components/profilepicdark.svg ">
                    </div>
                    <div class="client_id ">
                        <p>Jervi</p>
                        <img src="images/components/verified_badge.png ">
                    </div>
                    <div class="review ">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ”</p>
                    </div>
                    <div class="rating ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                    </div>
                </div>
                <!-- card 3 --
                <div class="card rightt ">
                    <div class="profile-pic ">
                        <img src="images/components/profilepic.svg ">
                    </div>
                    <div class="client_id ">
                        <p>Jervi</p>
                        <img src="images/components/verified_badge.png ">
                    </div>
                    <div class="review ">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ”</p>
                    </div>
                    <div class="rating ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                        <img src="images/components/Star 5.svg ">
                    </div>
                </div>
            </div>
        </div-->

        <!------------------------------>
        <!-- STAY CONNECTED WITH ME -->
        <div class="connected ">
            <h2>
                STAY CONNECTED WITH ME & THE TROOPS
            </h2>
            <div class="line "></div>

            <div class="social ">
                <div class="circle ">
                    <a class="item" href="https://www.youtube.com/channel/UCQhF4_APYzL4l8m_Th_59Nw" target="_blanc">
                        <img src="./images/social/youtube.svg" alt="" >
                    </a>
                    <a class="item" href="" target="_blanc">
                        <img src="./images/social/discord.svg " alt=" ">
                    </a>
                    <a class="item" href="" target="_blanc">
                        <img src="./images/social/facebook.svg" alt="">
                    </a>
                    <a class="item" href="" target="_blanc">
                        <img src="./images/social/instagram.svg " alt=" ">
                    </a>
                    <a class="doge "  href="" target="_blanc">
                        <img src="./images/social/doge.png" alt="">
                    </a>
                    
                </div>
            </div>
        </div>

    </div>

@endsection