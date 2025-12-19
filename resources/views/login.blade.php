@extends('layouts.app')

@section('title', 'Login')

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
                        <h1>Login</h1>
                        <h3>Sign in to manage your reservations, access exclusive offers, and enjoy a
                            personalized dining experience at Eat Restaurant.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--login-->
    <section class="contact page-section" id="login">
        <div class="container">
            <div class="heading">
                <h2>Access Your Account</h2>
                <h3>Log in to book tables, view your dining history, or explore special promotions tailored just for you.
                </h3>
            </div>
        </div>
        <div class="container w960">
            <div class="row">
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

                <form method="post" action="{{ route('login.post') }}" id="loginform">
                    @csrf
                    <input name="email" type="email" class="contact col-md-6" placeholder="E-mail address *"
                        value="{{ old('email') }}" required>
                    <input name="password" type="password" class="contact noMarr col-md-6" placeholder="Password *"
                        required>
                    <div class="col-md-12">
                        <p class="text-center">
                            <a href="#" class="forgot-password">Forgot Password?</a> |
                            <a href="{{ route('register') }}">Don't have an account? Register here</a>
                        </p>
                    </div>
                    <input type="submit" id="submit" class="contact submit" value="Login">
                </form>
            </div>
        </div>
    </section>
@endsection