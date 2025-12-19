@extends('layouts.app')

@section('title', 'About')

@section('header-content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="false" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>About Us</h1>
                        <h3>Learn about our journey, passion, and commitment to delivering exceptional dining
                            experiences.<br>
                            At Eat Restaurant, we create moments that linger long after the meal.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--about us-->
    <section class="aboutus page-section" id="aboutUs">
        <div class="container">
            <div class="heading">
                <h2>Who We Are</h2>
                <h3>Founded with a love for food and community, Eat Restaurant is more than just a place to
                    dine—it's a destination for connection and flavor.<br>
                    Our story began with a vision to bring people together over delicious, thoughtfully crafted
                    meals.</h3>
            </div>
            <div class="content">
                <p>Eat Restaurant was established in 2025 by a group of passionate food enthusiasts who wanted to
                    create a welcoming space where everyone feels at home. Our journey started in a small kitchen,
                    experimenting with flavors from around the world, and has grown into a beloved dining spot known for its
                    creativity and warmth.</p>
                <p>We believe food is more than sustenance—it's a way to tell stories, share cultures, and build
                    memories. Our chefs draw inspiration from global cuisines, using fresh, locally sourced
                    ingredients to craft dishes that delight the senses. From our vibrant street bites to our
                    elegant continental plates, every dish is made with care and passion.</p>
                <p>Our team is dedicated to making every visit special. Whether you're here for a casual lunch, a
                    romantic dinner, or a private event, we strive to create an atmosphere that feels like a warm
                    embrace. Our staff's commitment to exceptional service ensures that every guest leaves with a
                    smile.</p>
                <p>At Eat Restaurant, we're not just serving food—we're creating experiences. Join us to taste the
                    difference that passion, creativity, and community can make.</p>
            </div>
        </div>
    </section>
@endsection