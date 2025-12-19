@extends('layouts.app')

@section('title', 'Feedback')

@section('header-content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="false" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>Feedback</h1>
                        <h3>We love hearing from our guests! Your feedback helps us create unforgettable dining
                            experiences.<br>
                            Read what our customers have to say about Eat Restaurant.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--feedback-->
    <section class="feedback page-section" id="feedback">
        <div class="container">
            <div class="heading">
                <h2>What Our Guests Say</h2>
                <h3>Our guests' experiences inspire us to keep delivering exceptional food and service.<br>
                    Here are some of the kind words shared by our valued customers.</h3>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('img/default_user.png') }}"
                                                style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>The food at Eat Restaurant is absolutely divine! The signature pasta was a
                                                perfect blend of flavors, and the cozy ambiance made our evening truly
                                                special. We'll be back soon!</p>
                                            <small>Emma S.</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('img/default_user.png') }}"
                                                style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>I hosted my birthday party here, and the team went above and beyond. The
                                                custom cake was a showstopper, and the service was impeccable. Highly
                                                recommend!</p>
                                            <small>James R.</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('img/default_user.png') }}"
                                                style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>The daily specials are always a treat! Fresh ingredients and creative dishes
                                                make every visit exciting. The staff is so friendly, it feels like dining
                                                with family.</p>
                                            <small>Sarah L.</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection