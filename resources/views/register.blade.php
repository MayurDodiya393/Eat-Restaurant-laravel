@extends('layouts.app')

@section('title', 'Register')

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
                        <h1>Register</h1>
                        <h3>Create a new account.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="contact page-section" id="register">
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

                <form method="post" action="{{ route('register.post') }}" id="registerform">
                    @csrf
                    <input name="name" type="text" class="contact col-md-6" placeholder="Your Name *"
                        value="{{ old('name') }}" required>
                    <input name="email" type="email" class="contact noMarr col-md-6" placeholder="E-mail address *"
                        value="{{ old('email') }}" required>
                    required>
                    <input name="password" type="password" class="contact col-md-6" placeholder="Password *" required>
                    <input name="password_confirmation" type="password" class="contact noMarr col-md-6"
                        placeholder="Confirm Password *" required>
                    <input type="submit" id="submit" class="contact submit" value="Register">
                </form>
            </div>
        </div>
    </section>
@endsection