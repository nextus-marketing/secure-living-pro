@extends('layouts.frontend')
@section('title')
    Contact Us | Secure Living Pro
@endsection
@section('content')
    <div class="hero-inner-section-area">
        <img src="/frontend/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-5">
        <img src="/frontend/assets/img/elements/elements2.png" alt="" class="elements2 aniamtion-key-1">
        <img src="/frontend/assets/img/elements/elements3.html" alt="" class="elements3 aniamtion-key-5">
        <img src="/frontend/assets/img/elements/elements4.html" alt="" class="elements4 aniamtion-key-1">
        <img src="/frontend/assets/img/elements/elements5.html" alt="" class="elements5 keyframe5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 m-auto">
                    <div class="hero-main-area heading1 text-center">
                        <h1 class="text-anime-style-3">Contact Us</h1>
                        <a href="/">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-main-inner-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading2 contact-header">
                        <h5><img src="/frontend/assets/img/icons/finger2.svg" alt="">Contact Us</h5>
                        <h2>Let's Discuss Your Security Needs Solutions</h2>
                        <p>Have questions about our security and CCTV solutions? Ready to take the next step in securing
                            your property? Don't hesitate to get in touch with us. Our team of experts is here to provide
                            you with the guidance</p>
                        <div class="space32"></div>
                        <div class="number-address-area">
                            <div class="phone-number">
                                <div class="img1">
                                    <img src="/frontend/my-img/call-icons4.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Phone Number</p>
                                    <a href="tel:+18443000035">+880 123 456 789</a>

                                    </br>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .heading2 h5 {
            font-family: var(--ztc-family-font1);
            font-size: var(--ztc-font-size-font-s18);
            line-height: var(--ztc-font-size-font-s18);
            font-weight: var(--ztc-weight-regular);
            color: var(--ztc-text-text-3);
            border-radius: 4px;
            transition: all 0.4s;
            padding: 8px;
            position: relative;
            z-index: 1;
            display: inline-block;
            margin-bottom: 16px;
            background: rgb(255 204 186);
        }
    </style>
@endsection
