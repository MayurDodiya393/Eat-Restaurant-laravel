@extends('layouts.app')

@section('title', 'Home')

@section('header-content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>We are creative</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <a class="btn btn-hero btn-lg" href="{{ route('services') }}">Eat & Chat</a>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>We are smart</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <a class="btn btn-hero btn-lg" href="{{ route('services') }}">Eat & Chat</a>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>We are amazing</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <a class="btn btn-hero btn-lg" href="{{ route('services') }}">Eat & Chat</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--welcome section-->
    <section class="welcome page-section" id="welcome">
        <div class="container text-center">
            <div class="heading">
                <h2>Welcome to Eat Restaurant</h2>
                <h3>Experience the finest dining with a touch of creativity and warmth.<br>
                    Indulge in our delicious dishes crafted with love and passion.</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-area">
                        <img src="{{ asset('img/gallery/img1.jpg') }}" alt="Dish" class="img-responsive" />
                        <h3>Exquisite Cuisine</h3>
                        <p>Discover a menu filled with mouth-watering dishes that blend tradition with innovation.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <img src="{{ asset('img/gallery/img2.jpg') }}" alt="Ambiance" class="img-responsive" />
                        <h3>Cozy Ambiance</h3>
                        <p>Enjoy a warm and inviting atmosphere perfect for any occasion, from casual to special events.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <img src="{{ asset('img/gallery/img3.jpg') }}" alt="Service" class="img-responsive" />
                        <h3>Exceptional Service</h3>
                        <p>Our friendly staff is dedicated to making your dining experience unforgettable.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-hero btn-lg" href="{{ route('services') }}">Explore Our Menu</a>
        </div>
    </section>
@endsection