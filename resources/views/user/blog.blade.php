<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>{{ __('messages.one_health_medical_center') }}</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +963 0929012499</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> sara@gmail.com</a>
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
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about_us') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('messages.news') }}</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">{{ __('messages.news') }}</h1>
      </div>
    </div>
  </div>

 <div class="card shadow-sm p-4 mb-4">
  <h4 class="mb-4 text-center text-success">معلومات اللقاحات الأساسية للأطفال</h4>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center align-middle">
      <thead class="table-success">
        <tr>
          <th>اسم اللقاح</th>
          <th>العمر الموصى به</th>
          <th>الوقاية من</th>
          <th>الأعراض الجانبية</th>
          <th>ملاحظات طبية</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>BCG</td>
          <td>عند الولادة</td>
          <td>السل</td>
          <td>احمرار وتورم بسيط</td>
          <td>لا يُعطى لضعاف المناعة</td>
        </tr>
        <tr>
          <td>التهاب الكبد B</td>
          <td>عند الولادة</td>
          <td>التهاب الكبد الوبائي</td>
          <td>ألم موضعي، حرارة خفيفة</td>
          <td>يؤجل عند وجود حساسية شديدة</td>
        </tr>
        <tr>
          <td>الخماسي</td>
          <td>2 – 4 – 6 أشهر</td>
          <td>الدفتيريا، الكزاز، السعال الديكي، التهاب الكبد، السحايا</td>
          <td>تورم، بكاء مؤقت</td>
          <td>يؤجل عند وجود حرارة مرتفعة</td>
        </tr>
        <tr>
          <td>شلل الأطفال</td>
          <td>2 – 4 – 6 أشهر</td>
          <td>شلل الأطفال</td>
          <td>إسهال خفيف</td>
          <td>لا يعطى لضعف المناعة الشديد</td>
        </tr>
        <tr>
          <td>MMR</td>
          <td>12 شهر</td>
          <td>الحصبة، الحصبة الألمانية، النكاف</td>
          <td>حرارة خفيفة، طفح بسيط</td>
          <td>يمنع لمرضى نقص المناعة</td>
        </tr>
        <tr>
          <td>الثنائي الكهلي </td>
          <td>18 شهر</td>
          <td>تعزيز المناعة</td>
          <td>ألم موضعي</td>
          <td>تُعطى بعد تقييم الحالة</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

            {{-- Add remaining blog cards similarly... --}}
            
            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                
              </nav>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">{{ __('messages.app_promo') }}</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
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

      <p id="copyright">{{ __('messages.copyright') }}</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
  
</body>
</html>

