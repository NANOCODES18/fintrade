@extends("layouts.spacedcustomlayout")

@section("body")



<div class="banner banner-inner banner-s2 banner-s2-inner tc-light">
    <div class="banner-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-9">
                    <div class="banner-content">
                        <div class="line-animate">
                            <span class="line line-top"></span>
                            <span class="line line-right"></span>
                            <span class="line line-bottom"></span>
                            <span class="line line-left"></span>
                        </div>
                        <p class="sub-heading">Reasons to chose Us</p>
                        <h1 class="banner-heading">Why Chose Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image">
            <img src="images/bg-a.jpg" alt="banner">
        </div>
    </div>
</div>


</header>
    <style>
        body{
            background-color: #002a66;
            color: #fff;
        }
        .title{
            color: #002a66;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 24px;
            line-height: 29px;
            letter-spacing: 0.02em;
        }
        .text{
            color: black;
        }
        .card{
            box-shadow: 3px 3px 4px wheat;
            margin: 15px auto;
        }
        .fa{
            color: #0047ab;
            font-size: 70px;
        }
    </style>
    <div class="container my-5">
        <h1 class="text-center">WHY CHOOSE FINVEST TRADE</h1>
        <p class="text-center">We are a worldwide investment company that is committed to the <br> principle of revenue maximization and reduction of the financial risks at investing</p>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-shield" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Safe and Secure</h3>
                    <p class="text text-center">We use the highest level of protection. Our platform can resist attacks and drawdowns of any size.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-exchange" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Instant Exchange</h3>
                    <p class="text text-center">Enjoy instant Deposit And Withdrawal for most of our plans, get started immediately after paying.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-envelope" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">24/7 Support</h3>
                    <p class="text text-center">FinVest Customer Service is available around-the-clock to help you with any issue.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-clock-o" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Uptime Commitment</h3>
                    <p class="text text-center">Your Investment is too important to be offline. That's why we offer a 99.99% uptime guarantee</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-suitcase" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Margin Trading</h3>
                    <p class="text text-center">Our investment plans are tailored to the level of your investment opportunities. By investing more for a longer period</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-handshake-o" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Affiliate program</h3>
                    <p class="text text-center">We allow everyone to earn even without their investment. Sign Up, start promoting our website and earn</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <p class="text-center mb-2"><i class="fa fa-microchip" aria-hidden="true"></i></p>
                    <h3 class="title text-center mb-3">Artificial intelligence</h3>
                    <p class="text text-center">24/7 hours of seamless intelligent tracking, powerful data analysis and processing capabilities, and execution of corresponding operation strategies are all provided by our artificial intelligence algorithm.</p>
                </div>
            </div>
        </div>
    </div>




@endsection()
