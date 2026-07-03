<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>{{ __('messages.one_health_medical_center') }}</title>

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+963 0929012499</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span>sara@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
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
        <a class="navbar-brand" href="#"><span class="text-primary">{{ ('messages.one') }}</span>-{{ ('messages.health') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about_us') }}</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('/blog') }}">{{ __('messages.news') }}</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5"></ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{ asset('assets/img/blog/blog_1.jpg') }}" alt="{{ __('messages.blog_image_alt_1') }}">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">{{ __('messages.by') }}</span> <a href="#">Admin</a>
              </div>
              <span class="divider">|</span>
              <div class="post-date"><a href="#">22 Jan, 2018</a></div>
              <span class="divider">|</span>
            </div>
            <h2 class="post-title h1">{{ __('messages.blog_title_1') }}</h2>
            <div class="post-content">
              <p>{{ __('messages.blog_content_1_part1') }}</p>
              <p>{{ __('messages.blog_content_1_part2') }}</p>
              <hr>
              <p>{{ __('messages.blog_faq_q1') }}</p>
              <hr>
              <p>{{ __('messages.blog_faq_q2') }}</p>
              <hr>
              <p>{{ __('messages.blog_faq_q3') }}</p>
              <hr>
              <p>{{ __('messages.blog_faq_q4') }}</p>
              <hr>
              <p>{{ __('messages.blog_faq_q6') }}</p>
            </div>
          </article>
        </div>

        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">{{ __('messages.latest_news') }}</h3>
              <div class="blog-item">
                <a class="post-thumb" href="{{ url('/blog-details') }}">
                  <img src="{{ asset('assets/img/blog/blog_1.jpg') }}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{ url('/blog-details') }}">{{ __('messages.blog_title_1') }}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="{{ url('/blog-details') }}">
                  <img src="{{ asset('assets/img/blog/blog_2.jpg') }}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{ url('/blog-details') }}">{{ __('messages.blog_title_2') }}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="{{ url('/blog-details') }}">
                  <img src="{{ asset('assets/img/blog/blog_3.jpg') }}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{ url('/blog-details') }}">{{ __('messages.blog_title_3') }}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">{{ __('messages.paragraph') }}</h3>
              <p>{{ __('messages.blog_sidebar_paragraph') }}</p>
            </div>
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
            <li><a href="#">{{ __('messages.join_as_doctors') }}</a></li>
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

      <p id="copyright">&copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. {{ __('messages.all_right_reserved') }}</p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>
</html>