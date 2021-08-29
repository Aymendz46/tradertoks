@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/index.css">
@endsection

@section('page-title')
<title>Trader Toks | Homepage</title>
@endsection

@section('content')

<!------------------------------>
        <!-- MAIN -->
        <div class="main">
            <div class="left">
                <h1>Hey! I am</h1>
                <img src="./images/logo/Group 16.svg" alt="Trader course">
            </div>
            <div class="right ">
                <div class="image-bottom ">
                    <img src="./images/toks/toks2.png" alt="Trader Toks">
                </div>
                <div class="image-top">
                    <img src="./images/toks/toks1.png " alt="Trader Toks ">
                </div>
            </div>
        </div>

        <!-- Newsletter section -->
        <div class="newsletter-cont">
            <div class="section-title light">
                <h2>
                    JOIN THE <span>TRADER TROOPS!</span>
                </h2>
            </div>
            <div class="subsection">
                <p class="sub-title">
                    Stay updated with the latest news on the trading block X)
                </p>
                <div class="newsletter-mid">
                    <input type="email" name="email_add" placeholder="Enter your email"><button class="email-btn">GET IT!</button>
                </div>
                <p class="no-spam">No spam, unsub anytime.</p>
            </div>
        </div>

        <!------------------------------>
        <!-- WHO IS TRADER TOKS -->
        <div class="who ">
            <div class="section-title">
                <h1>
                    About Me
                </h1>
            </div>
            <div class="container">
                <div class="first">
                <div class="image-bottom ">
                    <img src="./images/toks/toks2.png" alt="Trader Toks">
                </div>
                <div class="image-top">
                    <img src="./images/toks/toks1.png " alt="Trader Toks ">
                </div>
            </div>
            <div class="second">
                <h2>TRADER TOKS (COREY)</h2>
                <div class="line "></div>
                <p>
                    Corey, also known as Trader Toks is a Youtuber, Investor/Trader, and most 
                    importantly devilishly handsome. 

                    Corey first discovered trading in
                    highschool and devoted his life early on to 
                    studying technical analysis. He quickly learned that the internet is riddled 
                    with misinformation and decided to share what he has learned over several
                    years through social media. Thus, Tradertoks was born.
                </p>
                <button href="{{ route('about') }}" class="btn">LEARN MORE <i class="fas fa-angle-double-right"></i></button>
            </div>
            </div>
            
        </div>

        <!------------------------------>
        <!-- COURSESS & TESTIMONIALS -->
        <div class="course ">
            <div class="band ">
                <div class="section-title light ">
                    <h1>
                        FEATURED COURSE
                    </h1>
                </div>
            </div>
            <!-- cards -->

            <div id="course-scroll " class="container ">
                <!-- card 1 -->
                <div class="card leftt ">
                    <div class="thumbnail ">
                        <img src="./images/product/Chart.svg ">
                    </div>
                    <div class="episode-title">
                        <p>Candle Sticks - Beginners</p>
                    </div>
                    <div class="course description ">
                        <p>In this episode, you will learn how to read candle sticks and the different types, etc etc.</p>
                    </div>
                    <div class="difficulty ">
                        <div class="level">
                            <p>Difficulty level:</p><img src="./images/course/cheems.svg">
                        </div>   
                        <p class="episode-number">Part 1</p>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card rightt ">
                    <div class="thumbnail ">
                        <img src="./images/product/Chart.svg ">
                    </div>
                    <div class="episode-title">
                        <p>Candle Sticks - Intermediate</p>

                    </div>
                    <div class="course description ">
                        <p>In this episode, you will learn how to read candle sticks and the different types, etc etc.</p>
                    </div>
                    <div class="difficulty ">
                        <div class="level">
                            <p>Difficulty level:</p><img src="./images/course/stronkDoge.svg">
                        </div>   
                        <p class="episode-number">Part 2</p>
                    </div>
                </div>
            </div>
                <div class="cta-div ">
                    <p>
                        Oh so you want more episodes?  ;)  <span class="green">Alright.</span> 
                    </p>
                    <button href="{{ route('purchase') }}" class="cta-btn">TAKE ME TO THE LAND OF COURSES!</button>
                </div>
        </div>

        <!------------------------------>
        <!-- WHO is this course for -->
        <div class="vids ">
            <div class="band ">
                <div class="section-title light ">
                    <h1>
                        LATEST VIDEOS
                    </h1>
                </div>
            </div>
            <div class="discover">
                <h1>
                    DISCOVER MY LATEST VIDEOS
                </h1>
            </div>
            <div class="container">
                <div class="first">
                <img src="./images/videos/thumbnail.png" alt="Trader Toks youtube">
            </div>
            <div class="second">
                <h2>These Altcoins Could Make You RICH! [AXS,DOGE,ADA]</h2>
                <div class="line "></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. ea commodo consequat. Duis aute irure dolor in reprehenderit. ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
                <button href="https://www.youtube.com/channel/UCQhF4_APYzL4l8m_Th_59Nw" class="btn">Take me to the video <i class="fas fa-angle-double-right"></i></button>
            </div>
            </div>
            
        </div>

        <!------------------------------>
        <!-- STAY CONNECTED WITH ME -->
        <div class="connected ">
            <h2>
                STAY CONNECTED WITH ME & THE TROOPS
            </h2>
            <div class="line "></div>

            <div class="social ">
                <div class="circle ">
                    <img class="item " src="./images/social/youtube.svg" alt="" href="https://www.youtube.com/channel/UCQhF4_APYzL4l8m_Th_59Nw">
                    <img class="item" src="./images/social/discord.svg " alt=" ">
                    <img class="item " src="./images/social/facebook.svg" alt="">
                    <img class="item" src="./images/social/instagram.svg " alt=" ">
                    <img class="doge " src="./images/social/doge.png" alt="">
                </div>
            </div>
        </div>

    </div>

@endsection