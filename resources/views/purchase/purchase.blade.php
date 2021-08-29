@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/purchase.css">
@endsection

@section('page-title')
<title>Trader Toks | Purchase</title>
@endsection

@section('content')

        <!-- menu-tab -->
        <div class="menu-tab">
            <span id="presentation" class="menu active">Presentation</span>
            <span id="details" class="menu">Details</span>
            <span id="purchase" class="menu">Purchase</span>
        </div>
        <main>
            <!-- Presentation -->
            <div class="presentation show">
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
                    <img src="images/product/chart.svg" alt="">
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
                        <button id="to-purchase" class="continue-btn">
                            Continue
                        </button>
                    </div>
                </div>
            </div>

            <!-- Purchase -->
            <div class="purchase">
                <div class="left">
                    <div class="video">
                        <img src="images/product/chart.svg" alt="">
                    </div>
                </div>
                <div class="right">
                    <h3>Payment details</h3>
                    <ul class="tabs">
                        <li id="paypal" class="tab">Paypal</li>
                        <li id="credit" class="tab active">Credit</li>
                        <li id="wallet" class="tab">Wallet</li>
                    </ul>
                    <form class="credit">
                        <!-- credit number -->
                        <div class="line">
                            <label for="credit-number">Card Number</label>
                            <br>
                            <div class="credit-number">
                                <img src="images/components/mastercard.svg" alt="">
                                <input class="input" id="credit-number" type="text" placeholder="****  ****  ****  ****">
                            </div>
                        </div>

                        <div class="line-row">
                            <div class="line-half">
                                <!-- valid-until -->
                                <label for="valid-until">Valid until</label>
                                <br>
                                <input class="input" id="valid-until" maxlength="5" type="text" placeholder="Month / Year">
                            </div>
                            <div class="line-half">
                                <!-- cvv -->
                                <label for="cvv">CVV</label>
                                <br>
                                <input class="input" id="cvv" maxlength="3" type="text" placeholder="***">
                            </div>
                        </div>

                        <!-- card holder -->
                        <div class="line">
                            <label for="card-holder">Card holder</label>
                            <br>
                            <input class="input" id="card-holder" type="text" placeholder="Your name and surname">
                        </div>

                        <div class="line-end">
                            <button>
                                Proceed to confirm
                            </button>
                            <span>
                                All your payments are secure
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </main>
    </div>

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
            $('#purchase').removeClass('active');

            $('.details').removeClass('show');
            $('.purchase').removeClass('show');
            $('.presentation').addClass('show');
        });
        $('#details').click(function() {
            $('#presentation').removeClass('active');
            $('#details').addClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.details').addClass('show');
        });
        $('#purchase').click(function() {
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#purchase').addClass('active');

            $('.presentation').removeClass('show');
            $('.details').removeClass('show');
            $('.purchase').addClass('show');
        });

        $('#to-presentation').click(function() {
            $('#presentation').addClass('active');
            $('#details').removeClass('active');
            $('#purchase').removeClass('active');

            $('.details').removeClass('show');
            $('.purchase').removeClass('show');
            $('.presentation').addClass('show');
        });

        $('#to-details').click(function() {
            $('#presentation').removeClass('active');
            $('#details').addClass('active');
            $('#purchase').removeClass('active');

            $('.presentation').removeClass('show');
            $('.purchase').removeClass('show');
            $('.details').addClass('show');
        });

        $('#to-purchase').click(function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            $('#presentation').removeClass('active');
            $('#details').removeClass('active');
            $('#purchase').addClass('active');

            $('.presentation').removeClass('show');
            $('.details').removeClass('show');
            $('.purchase').addClass('show');
        });
    </script>

@endsection