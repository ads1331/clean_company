<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cleaning Company - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  	<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col-12 col-md d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
						</div>
						<div class="col-12 col-md d-flex justify-content-md-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{route('show.index')}}">Cleaning<span>company</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			<li class="nav-item {{ Route::is('show.index') ? 'active' : '' }}">
        <a href="{{ route('show.index') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item {{ Route::is('show.about') ? 'active' : '' }}">
        <a href="{{ route('show.about') }}" class="nav-link">About</a>
    </li>
    <li class="nav-item {{ Route::is('show.services') ? 'active' : '' }}">
        <a href="{{ route('show.services') }}" class="nav-link">Services</a>
    </li>
    <li class="nav-item {{ Route::is('show.portfolio') ? 'active' : '' }}">
        <a href="{{ route('show.portfolio') }}" class="nav-link">Portfolio</a>
    </li>
    <li class="nav-item {{ Route::is('show.pricing') ? 'active' : '' }}">
        <a href="{{ route('show.pricing') }}" class="nav-link">Pricing</a>
    </li>
    <li class="nav-item {{ Route::is('show.blog') ? 'active' : '' }}">
        <a href="{{ route('show.blog') }}" class="nav-link">Blog</a>
    </li>
    <li class="nav-item {{ Route::is('show.contact') ? 'active' : '' }}">
        <a href="{{ route('show.contact') }}" class="nav-link">Contact</a>
    </li>
	        </ul>
	      </div>
	    </div>
	  </nav>