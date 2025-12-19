@extends('layouts.app')

@section('title', 'Services')

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
                        <h1>Our Services</h1>
                        <h3>Discover a world of flavors with our diverse dining options and exceptional
                            hospitality.<br>
                            From gourmet meals to cozy gatherings, we have it all.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="service page-section" id="service">
        <div class="container text-center">
            <div class="heading">
                <h2>Eat & Chat</h2>
                <h3>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
                    Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed
                    sollcitudin.</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3>Street Bites</h3>
                        <div class="box-area-text">Savor the vibrant flavors of our street-inspired dishes, crafted with
                            fresh ingredients and bold spices to bring the essence.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3>Continental Cuisine</h3>
                        <div class="box-area-text">Indulge in our expertly prepared continental dishes, featuring classic
                            recipes with a modern twist to satisfy every palate.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-fire"></i>
                        </div>
                        <h3>Daily Specials</h3>
                        <div class="box-area-text">Enjoy our chef's daily creations, made with seasonal ingredients to offer
                            fresh and exciting flavors every day of the week.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <h3>Artisan Cookies</h3>
                        <div class="box-area-text">Treat yourself to our handcrafted cookies, baked fresh daily with premium
                            ingredients for a delightful sweet escape.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h3>Custom Cakes</h3>
                        <div class="box-area-text">Celebrate your special moments with our bespoke cakes, designed and baked
                            to perfection for any occasion.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="box-area-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>Private Events</h3>
                        <div class="box-area-text">Host your gatherings in our cozy venue, with tailored menus and
                            exceptional service to make your events unforgettable.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection