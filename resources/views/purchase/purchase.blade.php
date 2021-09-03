@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/purchase.css">
@endsection

@section('page-script')
<script src="./js/loading(fast).js"></script>
@auth
<script src="https://js.stripe.com/v3/"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endauth
@endsection

@section('page-title')
<title>Trader Toks | Purchase</title>
@endsection

@section('content')

        <!-- menu-tab -->
        <div class="menu-tab">

            <span id="presentation" class="menu {{ $source == 'purchase' ? '' : 'active' }}">Presentation</span>

            <span id="details" class="menu">Details</span>

            @guest
            <span id="account" class="menu">Register</span>
            @endguest

            <span id="purchase" class="menu {{ $source == 'purchase' ? 'active' : '' }}">Purchase</span>
 
        </div>
        <main>
            <!-- Presentation -->
            <div class="presentation {{ $source == 'purchase' ? '' : 'show' }}">
                <h3>Presentation</h3>
                <div class="video">
                    <img class="preview" src="images/product/chart.svg" alt="">
                    <img class="play-btn" src="images/components/play_btn.svg" alt="">
                </div>
                <div class="bottom">
                    <div class="title">
                        Course title
                    </div>
                    <div class="continue">
                        <button id="to-details" class="continue-btn">
                            Continue
                        </button>
                    </div>
                </div>
            </div>

            <!-- Details -->
            <div class="details">
                <div class="top">
                    <img src="images/product/3-min.png" alt="">
                    <h1>Course</h1>
                </div>
                <div class="bottom">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quasi a reiciendis iusto. Dolorum delectus ea labore corporis magni possimus. Nam sint odit, ullam fugiat expedita dolorum corrupti nostrum deleniti.</p>
                    <ol>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quasi a reiciendis iusto. Dolorum delectus ea labore corporis magni possimus</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quasi a reiciendis iusto. Dolorum delectus ea labore corporis magni possimus</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quasi a reiciendis iusto. Dolorum delectus ea labore corporis magni possimus</li>
                    </ol>
                    <div class="continue">
                        <button id="to-presentation" class="previous-btn">
                            Previous
                        </button>
                        <button id="to-account" class="continue-btn">
                            Continue
                        </button>
                    </div>
                </div>
            </div>

            @guest
            <!-- Details -->
            <div class="account">
                <div id="register" class="show">
                    <h3>Create an account</h3>
                    <p>to easily access your course after purchase</p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label for="name">Name</label>
                            <input name="name" type="text" required>
                        </div>
                        <div class="row">
                            <label for="email">Email</label>
                            <input name="email" type="text" required>
                        </div>
                        <div class="row">
                            <label for="password">Password</label>
                            <input name="password" type="password" required>
                        </div>
                        <div class="buttom-row">
                            <div class="log">
                                <span  id="to-login">Already have an account!</span>
                            </div>
                            <button type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
                <div id="login">
                    <h3>Login to your account</h3>
                    <p>to easily access your course after purchase</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label for="email">Email</label>
                            <input name="email" type="text" required>
                        </div>
                        <div class="row">
                            <label for="password">Password</label>
                            <input name="password" type="password" required>
                        </div>
                        <input id="remember_me" type="checkbox" name="remember" hidden checked>

                        <div class="buttom-row">
                            <div class="log">
                                <span id="to-register">Dont have account!</span>
                            </div>
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            @endguest

            <!-- Purchase -->

            <div class="purchase {{ $source == 'purchase' ? 'show' : '' }}">
                <div class="left">
                    <div class="video">
                        <img src="images/product/3-min.png" alt="">
                    </div>
                </div>
                <div class="right">
                    <h3>Payment details</h3>
                    <ul class="tabs">
                        <li id="paypal" class="tab">Paypal</li>
                        <li id="credit" class="tab active">Stripe</li>
                        <li id="wallet" class="tab">Wallet</li>
                    </ul>
                    @guest
                        <div class="ask-log">
                            <h3>Please Loggin</h3>
                            <button id="to-account-back" class="continue-btn">
                                <- Login
                            </button>
                        </div>
                    @endguest
                    @auth
                    <!-- credit number -->
                    <form id="payment-form" class="credit">
                        <div id="card-element">
                            <!-- Elements will create input elements here -->
                        </div>
                        
                        <!-- We'll put the error messages in this element -->
                        <div id="card-errors" role="alert"></div>
                        <div class="credit-submit">
                            <button id="submit-stripe">Submit Payment</button>
                        </div>
                    </form>
                    @endauth
                </div>
            </div>
        </main>
    </div>
    @include('layout.logo')

    @auth
    <script>
        var stripe = Stripe('pk_test_51Gq7OjI8y7N0oWUMJPOgCTAHKeRnhaCJY1juZH6nJbCnqJQhe7igjgNO1kp7jjyB50rZB41dwtvBxRp1Tabcceh800NnPK6vAv');
        var elements = stripe.elements();
        var style = {
            base: {
                color: "#32325d",
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                color: "#32325d"
                }
            },
            invalid: {
                fontFamily: 'Arial, sans-serif',
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };

        var card = elements.create("card", { style: style });
        card.mount("#card-element");
        card.on('change', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            //disable submit button
            var submitButton = document.getElementById('submit-stripe');
            submitButton.disabled = true;
            submitButton.classList.add('wait');
            submitButton.innerHTML = "";
            // If the client secret was rendered server-side as a data-secret attribute
            // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
            stripe.confirmCardPayment("{{ $stripeClient}}", {
                payment_method: {
                card: card,
                billing_details: {
                    name: 'Jervi'
                }
                }
            }).then(function(result) {
                if (result.error) {
                    //enable submit button
                    submitButton.disabled = false;
                    submitButton.classList.remove('wait');
                    submitButton.innerHTML = "Submit Payment";
                    // Show error to your customer (e.g., insufficient funds)
                    console.log(result.error.message);
                } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                   
                    console.log(result.paymentIntent);
                    var paymentIntent = result.paymentIntent;
                    var form = document.getElementById('payment-form');
                    var url = form.action;
                    var redirect = '/videos';

                    $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });

                    jQuery.ajax({
                            url: "{{ route('stripe') }}",
                            method: 'post',
                            data: {
                                paymentIntent: paymentIntent,
                            },
                            success: function(result){
                                console.log(result);
                            }
                    });

                }
                }
            });
        });
    </script>
    @endauth
    <script>
        $('#valid-until').keypress(function(e) {
            var e = $('#valid-until');
            var length = e.val().length;
            if (length == 2) {
                $('#valid-until').val(e.val() + '/');
            }
        });
    </script>
    <script>
        $('#presentation').click(function() {
            $('#presentation').addClass('active');
            $('#details').removeClass('active');
            $('#account').removeClass('active');
            $('#purchase').removeClass('active');

            $('.details').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').removeClass('show');
            $('.presentation').addClass('show');
        });
        $('#details').click(function() {
            $('#presentation').removeClass('active');
            $('#details').addClass('active');
            $('#account').removeClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').removeClass('show');
            $('.details').addClass('show');
        });
        $('#account').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#account').addClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').addClass('show');
            $('.details').removeClass('show');
        });
        $('#purchase').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#account').removeClass('active');
            $('#purchase').addClass('active');

            $('.presentation').removeClass('show');
            $('.details').removeClass('show');
            $('.account').removeClass('show');
            $('.purchase').addClass('show');
        });

        $('#to-presentation').click(function() {
            $('#presentation').addClass('active');
            $('#details').removeClass('active');
            $('#account').removeClass('active');
            $('#purchase').removeClass('active');

            $('.details').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').removeClass('show');
            $('.presentation').addClass('show');
        });
        

        $('#to-account').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#account').addClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').addClass('show');
            $('.details').removeClass('show');
        });

        $('#to-account-back').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#account').addClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').addClass('show');
            $('.details').removeClass('show');
        });

        $('#to-details').click(function() {
            $('#presentation').removeClass('active');
            $('#details').addClass('active');
            $('#account').removeClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.account').removeClass('show');
            $('.details').addClass('show');
        });

        $('#to-purchase').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#account').removeClass('active');
            $('#purchase').addClass('active');

            $('.presentation').removeClass('show');
            $('.details').removeClass('show');
            $('.account').removeClass('show');
            $('.purchase').addClass('show');
        });

        $('#to-login').click(function() {
            $('#account').text('Login');
            $('#register').removeClass('show');
            $('#login').addClass('show');
        });

        $('#to-register').click(function() {
            $('#account').text('Register');
            $('#login').removeClass('show');
            $('#register').addClass('show');
        });


        
    </script>

@endsection