<!--------------------------->
<!-------Footer------------->
<div>
    @if(session('successMail'))
        <div class="alert alert-success alert-dismissible">
            <a onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div class="alert content">{{ session('successMail') }}</div>
        </div>
    @elseif(session('failureMail'))  
        <div class="alert alert-danger alert-dismissible">
            <a onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div class="alert content">{{ session('failureMail') }}</div>
        </div>
    @endif
</div>

<div>
    @if(session('successPayment'))
        <div class="alert alert-success alert-dismissible">
            <a onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div class="alert content">{{ session('successPayment') }}</div>
        </div>
    @elseif(session('failurePayment'))  
        <div class="alert alert-danger alert-dismissible">
            <a onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div class="alert content">{{ session('failurePayment') }}</div>
        </div>
    @endif
</div>

<footer>
    <div class="ft-cont">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('videos') }}">Videos</a></li>
            <li><a href="{{ route('about') }}">About Me</a></li>
            <li><a href="{{ route('course') }}">Course</a></li>
            <li><a href="{{ route('contact') }}" class="active">Contact Me</a></li>
        </ul>
        <div class="mid-footer">
            <a href="{{ route('home') }}"><img src="./images/logo/TTfooterlogo.svg" ></a>
            <form method="POST" action="/">
                @csrf
                <div class="newsletter">
                    <p class="up">Stay updated with the latest news on the trading block X)</p>
                    <div class="email-input-d">
                        
                        <input type="email" name="email" placeholder="Enter your email" required><button type="submit" class="email-btn">GET IT!</button>
                    </div>
                    <p class="no-spam">No spam, unsub anytime.</p>
                </div>
            </form>
        </div>
        <div class="end-footer">
            <div></div>
            <p>CREATED BY  <a href="" class="footer-link"><b>2 KINGS WEBSITES</b></a> | Copyright 2021 reserved to <b>Trader Toks.</b></p>
            <div class="socials">
                <a href="" target="_blanc">
                    <img src="./images/social/Discorddark.svg">
                </a>
                <a href="" target="_blanc">
                    <img src="./images/social/IG.svg">
                </a>
                <a href="" target="_blanc">
                    <img src="./images/social/YouTubeDrk.svg">
                </a>
                <a href="" target="_blanc">
                    <img src="./images/social/FB.svg">
                </a>
                <a href="" target="_blanc">
                    <img src="./images/social/Twitter.svg">
                </a>
            </div>
        </div>
        <div class="credits">
        </div>
    </div>
</footer>