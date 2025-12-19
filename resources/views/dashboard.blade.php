@extends('layouts.app')

@section('title', 'Dashboard')

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
                        <h1>Welcome, {{ Auth::user()->name }}!</h1>
                        <h3>Manage your profile, reservations, and dining preferences</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--dashboard-->
    <section class="contact page-section" id="dashboard">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('success') }}
                </div>
            @endif

            <div class="heading">
                <h2>Your Dashboard</h2>
                <h3>Welcome back to Eat Restaurant, {{ Auth::user()->name }}!</h3>
            </div>
        </div>

        <div class="container w960">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default"
                        style="padding: 30px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 5px;">
                        <h3>Profile Information</h3>
                        <table class="table table-striped">
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Member Since:</strong></td>
                                <td>{{ Auth::user()->created_at->format('F d, Y') }}</td>
                            </tr>
                        </table>

                        <hr>

                        <h4>Quick Actions</h4>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                <div class="text-center"
                                    style="padding: 20px; background: white; border: 1px solid #ddd; border-radius: 5px;">
                                    <a href="{{ route('contact') }}" class="btn btn-primary" style="width: 100%;">
                                        <i class="fa fa-envelope"></i> Send Message
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center"
                                    style="padding: 20px; background: white; border: 1px solid #ddd; border-radius: 5px;">
                                    <a href="{{ route('services') }}" class="btn btn-primary" style="width: 100%;">
                                        <i class="fa fa-cutlery"></i> View Services
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center"
                                    style="padding: 20px; background: white; border: 1px solid #ddd; border-radius: 5px;">
                                    <a href="{{ route('gallery') }}" class="btn btn-primary" style="width: 100%;">
                                        <i class="fa fa-images"></i> View Gallery
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h4>Account Settings</h4>
                        <p>To change your password or other account details, please contact our support team.</p>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-sign-out"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection