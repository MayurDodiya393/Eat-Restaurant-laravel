@extends('layouts.app')

@section('title', 'Contact')

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
                        <h1>Contact Us</h1>
                        <h3>Get in touch with us to make a reservation, inquire about events, or share your
                            feedback.<br>
                            We're here to help create your perfect dining experience at Eat Restaurant.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--contact-->
    <section class="contact page-section" id="contact">
        <div class="container">
            <div class="heading">
                <h2>Contact Us</h2>
                <h3>Whether you're planning a special occasion, need assistance with reservations, or just want to
                    say hello, our team is ready to assist.<br>
                    Reach out to us through the details below or use our contact form.</h3>
            </div>
        </div>
        <div class="container w960">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-4">
                    <div class="contact-info">
                        <h4><i class="fa fa-map-marker"></i> Visit Us</h4>
                        <p>123 Flavor Street<br>
                            Downtown City, ST 12345<br>
                            United States</p>

                        <h4><i class="fa fa-clock-o"></i> Hours</h4>
                        <p>Monday - Sunday<br>
                            11:00 AM - 10:00 PM</p>

                        <h4><i class="fa fa-phone"></i> Call Us</h4>
                        <p>(555) 123-4567</p>

                        <h4><i class="fa fa-envelope"></i> Email</h4>
                        <p>info@eatrestaurant.com</p>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-8">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('contact.send') }}" id="contactform">
                        @csrf
                        <input name="name" type="text" class="contact col-md-6" placeholder="Your Name *" required>
                        <input name="email" type="email" class="contact noMarr col-md-6" placeholder="E-mail address *"
                            required>
                        <textarea name="message" class="contact col-md-12"
                            placeholder="Your Message * (Reservations, Events, Feedback, etc.)" required></textarea>
                        <input type="submit" id="submit" class="contact submit" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection