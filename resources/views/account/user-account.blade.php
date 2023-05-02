@extends('layouts.account')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJ Resume - About Page</title>
    <!-- CSS FILES -->        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
    
</head>
<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="/">
                    <img src="{{ asset('images/logo.PNG') }}" class="logo-image img-fluid" alt="templatemo pod talk">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CVDesign.html">CV Template</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    @guest
                    <div class="ms-4">
                        <a href="/register" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
                    </div>
                    @endguest
                    @auth
                </div>
                                    <div class="dropdown ms-4">
                <button class="btn custom-btn custom-border-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dashboard
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>

                @endauth
            </div>
        </div>
    </nav>
</main>


<div class="account-layoutborder">
  <div class="account-hdr bg-primary text-white border ">
    User Account
  </div>
  <div class="account-bdy border py-3">
    <div class="row container d-flex justify-content-center">
        <div class="col-xl-12 col-md-12">
            <div class="card user-card-full">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25"> <img src="{{asset('images/user-profile.png')}}" class="img-radius" alt="User-Profile-Image"> </div>
                            <h6 class="f-w-600">{{auth()->user()->name}}</h6>
                            @role('user')
                            <p>User</p> 
                            @endrole
                            @role('admin')
                            <p>Author (Job Lister) <i class="fas fa-pen-square"></i></p> 
                            @endrole
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email</p>
                                <h6 class="text-muted f-w-400">{{auth()->user()->email}}</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Phone</p>
                                    <h6 class="text-muted f-w-400">not set</h6>
                                </div>
                            </div>
                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Account</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Password</p>
                                    <a href="{{route('account.changePassword')}}" class="btn primary-outline-btn">Change password</a>
                                </div>
                                <div class="col-sm-6">
                                  <p class="m-b-10 f-w-600">Logout</p>
                                    <a href="{{route('logout')}}" class="btn btn-outline-dark">Logout</a>
                                </div>
                            </div>
                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@include('inc.footer')


@push('css')
<style>
.user-card-full {
    overflow: hidden;
}
.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}
.m-r-0 {
    margin-right: 0px
}
.m-l-0 {
    margin-left: 0px
}
.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}
.bg-c-lite-green {
    background: linear-gradient(to right, #185A91, #3498DA)
}
.user-profile {
    padding: 20px 0
}
.card-block {
    padding: 1.25rem
}
.m-b-25 {
    margin-bottom: 25px
}
.img-radius {
    border-radius: 5px
}
h6 {
    font-size: 14px
}
.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}
.card-block {
    padding: 1.25rem
}
.b-b-default {
    border-bottom: 1px solid #e0e0e0
}
.m-b-20 {
    margin-bottom: 20px
}
.p-b-5 {
    padding-bottom: 5px !important
}
.card .card-block p {
    line-height: 25px
}
.m-b-10 {
    margin-bottom: 10px
}
.text-muted {
    color: #919aa3 !important
}
.b-b-default {
    border-bottom: 1px solid #e0e0e0
}
.f-w-600 {
    font-weight: 600
}
.m-b-20 {
    margin-bottom: 20px
}
.m-t-40 {
    margin-top: 20px
}
.p-b-5 {
    padding-bottom: 5px !important
}
.m-b-10 {
    margin-bottom: 10px
}
.m-t-40 {
    margin-top: 20px
}
</style>
@endpush