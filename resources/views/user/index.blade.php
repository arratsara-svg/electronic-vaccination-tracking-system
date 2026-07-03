<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - {{ __('messages.medical_center') }}</title>

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
            <a href="#"><span class="mai-call text-primary"></span> +963 0929012499</a>
            <span class="divider">|</span>
            <a href="#"><span class="mai-mail text-primary"></span> sara@gmail.com</a>
          </div>
        </div>
        <div class="@if(app()->getLocale() == 'ar') text-right @else text-left @endif col-sm-4 text-sm">
          <div class="social-mini-button">
            <a href="https://www.facebook.com/groups/1040858533967565/?ref=share&mibextid=NSMWBT"><span class="mai-logo-facebook-f"></span></a>
            <a href="https://www.instagram.com/d9m9cc?igsh=MTdhNXUwdGx2NHZxdA=="><span class="mai-logo-instagram"></span></a>
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
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about_us') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">{{ __('messages.news') }}</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset('assets/img/bg_image_1.jpg') }});">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">{{ __('messages.lets_make_life_happier') }}</span>
      <h1 class="display-4">{{ __('messages.healthy_living') }}</h1>
      <a href="#" class="btn btn-primary">{{ __('messages.lets_consult') }}</a>
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p>{{ __('messages.chat_with_doctors') }}</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p>{{ __('messages.one_health_protection') }}</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p>{{ __('messages.one_health_pharmacy') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>{{ __('messages.welcome_health_center') }}</h1>
          <p class="text-grey mb-4">{{ __('messages.home_welcome_text') }}</p>
          <a href="{{ url('/about') }}" class="btn btn-primary">{{ __('messages.learn_more') }}</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="{{ asset('assets/img/bg-doctor.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">{{ __('messages.latest_news') }}</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category"><a href="#">Covid19</a></div>
              <a href="#" class="post-thumb"><img src="{{ asset('assets/img/blog/blog_1.jpg') }}" alt=""></a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">{{ __('messages.news_title_1') }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img"><img src="{{ asset('assets/img/person/person_1.jpg') }}" alt=""></div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category"><a href="#">Covid19</a></div>
              <a href="#" class="post-thumb"><img src="{{ asset('assets/img/blog/blog_2.jpg') }}" alt=""></a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">{{ __('messages.news_title_2') }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img"><img src="{{ asset('assets/img/person/person_1.jpg') }}" alt=""></div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category"><a href="#">Covid19</a></div>
              <a href="#" class="post-thumb"><img src="{{ asset('assets/img/blog/blog_3.jpg') }}" alt=""></a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">{{ __('messages.news_title_3') }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img"><img src="{{ asset('assets/img/person/person_2.jpg') }}" alt=""></div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{ url('/blog') }}" class="btn btn-primary">{{ __('messages.read_more') }}</a>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">{{ __('messages.make_appointment') }}</h1>
      <form class="main-form">
        <div class="row mt-5">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="{{ __('messages.full_name') }}">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="{{ __('messages.email_address') }}">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">{{ __('messages.general_health') }}</option>
              <option value="cardiology">{{ __('messages.cardiology') }}</option>
              <option value="dental">{{ __('messages.dental') }}</option>
              <option value="neurology">{{ __('messages.neurology') }}</option>
              <option value="orthopaedics">{{ __('messages.orthopaedics') }}</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="{{ __('messages.number') }}">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="{{ __('messages.enter_message') }}"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">{{ __('messages.submit_request') }}</button>
      </form>
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
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.company') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">{{ __('messages.about_us') }}</a></li>
            <li><a href="#">{{ __('messages.career') }}</a></li>
            <li><a href="#">{{ __('messages.editorial_team') }}</a></li>
            <li><a href="#">{{ __('messages.protection') }}</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.more') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">{{ __('messages.terms_condition') }}</a></li>
            <li><a href="#">{{ __('messages.privacy') }}</a></li>
            <li><a href="#">{{ __('messages.advertise') }}</a></li>
            <li><a href="#">{{ __('messages.join_doctors') }}</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.our_partner') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">{{ __('messages.one_fitness') }}</a></li>
            <li><a href="#">{{ __('messages.one_drugs') }}</a></li>
            <li><a href="#">{{ __('messages.one_live') }}</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.contact') }}</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">{{ __('messages.social_media') }}</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>
      <p id="copyright">&copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All rights reserved</p>
    </div>
  </footer>

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
