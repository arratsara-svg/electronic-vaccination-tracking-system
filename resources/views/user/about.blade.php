<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>One Health - {{ __('messages.about_us') }}</title>

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
  @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
  @else
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  @endif
  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="@if(app()->getLocale() == 'ar') text-left @else text-right @endif col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>  +963 0929012499</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> sara@gmail.com</a>
            </div>
          </div>
          <div class="@if(app()->getLocale() == 'ar') text-right @else text-left @endif col-sm-4 text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav @if(app()->getLocale() == 'ar') mr-auto @else ml-auto @endif">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/blog') }}">{{ __('messages.news') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/about') }}">{{ __('messages.about_us') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url({{ asset('assets/img/bg_image_1.jpg') }});">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
            <li class="breadcrumb-item active">{{ __('messages.about_us') }}</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">{{ __('messages.about_us') }}</h1>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p>{{ __('messages.ability_to_book') }}</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p>{{ __('messages.one_health_protection') }}</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p>{{ __('messages.better_life') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">{{ __('messages.welcome_health_center') }}</h1>
          <div class="text-lg">
            <p>{{ __('messages.comprehensive_care') }}</p>
            <p>{{ __('messages.modern_healthcare') }}</p>
            <p>{{ __('messages.advancing_health') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url({{ asset('assets/img/banner-pattern.svg') }});">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{ asset('assets/img/mobile_app.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">{{ __('messages.one_health_app') }}</h1>
          <a href="#"><img src="{{ asset('assets/img/google_play.svg') }}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{ asset('assets/img/app_store.svg') }}" alt=""></a>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="container">
      <p>&copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All rights reserved</p>
    </div>
  </footer>

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
  
</body>
</html>
