@extends('layouts.app')

@section('title', 'Gallery')

@section('header-content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="false" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>Our Gallery</h1>
                        <h3>Take a glimpse into the heart of Eat Restaurant, where delicious dishes and warm
                            ambiance create unforgettable moments.<br>
                            Explore our culinary creations and inviting atmosphere.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-css')
@endsection

@section('content')
    <!--gallery-->
    <section class="gallery page-section" id="gallery">
        <div class="container">
            <div class="heading">
                <h2>Our Gallery</h2>
                <h3>From mouth-watering dishes to cozy dining spaces, our gallery showcases the essence of Eat
                    Restaurant.<br>
                    Discover the flavors and moments that make us special.</h3>
            </div>
            <div id="grid-gallery" class="grid-gallery">
                <section class="grid-wrap">
                    <ul class="grid">
                        <li class="grid-sizer"></li><!-- for Masonry column width -->
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img1.jpg') }}" alt="Signature Dish" />
                                <figcaption>
                                    <h3>Signature Pasta</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img2.jpg') }}" alt="Dining Ambiance" />
                                <figcaption>
                                    <h3>Cozy Dining Area</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img3.jpg') }}" alt="Dessert Platter" />
                                <figcaption>
                                    <h3>Artisan Dessert Platter</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img4.jpg') }}" alt="Street Bites" />
                                <figcaption>
                                    <h3>Spicy Street Bites</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img5.jpg') }}" alt="Cocktail Special" />
                                <figcaption>
                                    <h3>Signature Cocktail</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img6.jpg') }}" alt="Chef's Special" />
                                <figcaption>
                                    <h3>Chef's Daily Special</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img7.jpg') }}" alt="Private Event" />
                                <figcaption>
                                    <h3>Private Event Setup</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img8.jpg') }}" alt="Fresh Ingredients" />
                                <figcaption>
                                    <h3>Fresh Local Ingredients</h3>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </section><!-- // end small images -->
                <section class="slideshow">
                    <ul>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img1.jpg') }}" alt="Signature Dish" />
                                <figcaption>
                                    <h3>Signature Pasta</h3>
                                    <p>Our handcrafted pasta, tossed in a rich, creamy sauce, is a guest favorite,
                                        made with fresh ingredients and a touch of love.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img2.jpg') }}" alt="Dining Ambiance" />
                                <figcaption>
                                    <h3>Cozy Dining Area</h3>
                                    <p>Our warm and inviting dining space, perfect for intimate dinners or lively
                                        gatherings with friends and family.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img3.jpg') }}" alt="Dessert Platter" />
                                <figcaption>
                                    <h3>Artisan Dessert Platter</h3>
                                    <p>A delightful assortment of our handcrafted desserts, featuring seasonal
                                        flavors and exquisite presentation.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img4.jpg') }}" alt="Street Bites" />
                                <figcaption>
                                    <h3>Spicy Street Bites</h3>
                                    <p>Bold and flavorful street-inspired dishes that bring global culinary
                                        traditions to your table.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img5.jpg') }}" alt="Cocktail Special" />
                                <figcaption>
                                    <h3>Signature Cocktail</h3>
                                    <p>Refresh with our expertly crafted cocktails, blending fresh ingredients and
                                        creative twists for a perfect sip.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img6.jpg') }}" alt="Chef's Special" />
                                <figcaption>
                                    <h3>Chef's Daily Special</h3>
                                    <p>Experience our chef's creativity with daily specials made from the freshest
                                        seasonal ingredients.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img7.jpg') }}" alt="Private Event" />
                                <figcaption>
                                    <h3>Private Event Setup</h3>
                                    <p>Our elegant venue, tailored for your special occasions, with personalized
                                        menus and attentive service.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ asset('img/gallery/img8.jpg') }}" alt="Fresh Ingredients" />
                                <figcaption>
                                    <h3>Fresh Local Ingredients</h3>
                                    <p>We source the finest local produce to ensure every dish bursts with flavor
                                        and quality.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <nav>
                        <span class="icon nav-prev"></span>
                        <span class="icon nav-next"></span>
                        <span class="icon nav-close"></span>
                    </nav>
                </section><!-- // end slideshow -->
            </div><!-- // grid-gallery -->
        </div>
    </section>
@endsection