<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center </title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<script>
    function toggleChat() {
        const box = document.getElementById('chat-box');
        box.style.display = box.style.display === 'none' ? 'block' : 'none';
    }

    function sendMessage() {
        const input = document.getElementById('chat-input');
        const msg = input.value.trim();
        if (!msg) return;

        const chat = document.getElementById('chat-messages');
        chat.innerHTML += `<div><b>أنت:</b> ${msg}</div>`;

        // ردود بسيطة حسب الكلمات
        let reply = "عذرًا، لم أفهم سؤالك.";
        if (msg.includes("موعد")) reply = "يمكنك معرفة موعد التطعيم من صفحة 'جدولي'.";
        else if (msg.includes("مركز")) reply = "اضغط على زر 'أقرب مركز صحي' لعرض المراكز القريبة.";
        else if (msg.includes("تسجيل")) reply = "لإضافة طفل جديد، اذهب إلى صفحة 'تسجيل طفل'.";
        else if (msg.includes("شكرا") || msg.includes("شكر")) reply = "على الرحب والسعة! 😊";

        chat.innerHTML += `<div><b>المساعد:</b> ${reply}</div>`;
        input.value = '';
        chat.scrollTop = chat.scrollHeight;
    }
</script>
<script>
    function openGoogleMaps() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                const query = `https://www.google.com/maps/search/مستوصف+صحي/@${lat},${lng},15z`;
                window.open(query, '_blank');
            }, function(error) {
                alert('تعذر تحديد موقعك: ' + error.message);
            });
        } else {
            alert('المتصفح لا يدعم تحديد الموقع.');
        }
    }
</script>

<body>

    <!-- Back to top button -->
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
                            <a href="https://www.facebook.com/groups/1040858533967565/?ref=share&mibextid=NSMWBT"><span
                                    class="mai-logo-facebook-f"></span></a>

                            <a href="https://www.instagram.com/d9m9cc?igsh=MTdhNXUwdGx2NHZxdA=="><span
                                    class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->



        <!-- زر فتح الشات -->
        <div id="chat-toggle" onclick="toggleChat()"
            style="position: fixed; bottom: 20px; right: 20px; background-color: #28a745; color: white; padding: 12px 15px; border-radius: 50%; cursor: pointer; z-index: 999;">
            💬
        </div>
<!-- زر فتح الشات -->
<div id="chat-toggle" onclick="toggleChat()"
    style="position: fixed; bottom: 20px; right: 20px; background-color: #28a745;
    color: white; padding: 12px 15px; border-radius: 50%; cursor: pointer; z-index: 999;">
    💬
</div>

<!-- صندوق الشات -->
<div id="chat-box"
    style="display:none; position: fixed; bottom: 80px; right: 20px; width: 320px;
    background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.3); z-index: 999;">

    <div style="background:#28a745;color:white;padding:10px;border-radius:10px 10px 0 0;">
        مساعد التطعيم
    </div>

    <div id="chat-messages" style="height:230px; overflow-y:auto; padding:10px; font-size:14px;">
        <div><b>المساعد:</b> أهلاً بك 👋 كيف أستطيع مساعدتك؟</div>
    </div>

    <!-- أزرار سريعة -->
    <div style="padding:5px;">
        <button onclick="quick('حجز موعد')" style="margin:2px;">📅 حجز موعد</button>
        <button onclick="quick('لقاحات')" style="margin:2px;">💉 اللقاحات</button>
        <button onclick="quick('مركز صحي')" style="margin:2px;">🏥 المراكز</button>
        <button onclick="quick('طفل')" style="margin:2px;">👶   معلومات طفل</button>
    </div>

    <input id="chat-input" type="text" placeholder="اكتب سؤالك..."
        style="width:100%; padding:8px; border:none; border-top:1px solid #ccc;"
        onkeydown="if(event.key==='Enter') sendMessage()">
</div>

<script>
function toggleChat() {
    let box = document.getElementById("chat-box");
    box.style.display = box.style.display === "none" ? "block" : "none";
}

function quick(text) {
    document.getElementById("chat-input").value = text;
    sendMessage();
}

function sendMessage() {
    let input = document.getElementById("chat-input");
    let msg = input.value.trim();
    if (!msg) return;

    let chat = document.getElementById("chat-messages");
    chat.innerHTML += <div><b>أنت:</b> ${msg}</div>;

    let reply = getResponse(msg);

    chat.innerHTML += <div style="color:green;"><b>المساعد:</b> ${reply}</div>;
    chat.scrollTop = chat.scrollHeight;
    input.value = "";
}

// 🔹 الذكاء البسيط (تحليل الكلمات)
function getResponse(text) {
    text = text.toLowerCase();

    if (text.includes("موعد") || text.includes("حجز")) {
        return "يمكنك معرفة الموعد من خلال تبويب الحجوزات بعد تسجيل الدخول إلى النظام.";
    }

    if (text.includes("لقاح") || text.includes("تطعيم")) {
        return "اللقاحات المتوفرة تظهر في قسم الأخبار مع معلومات كاملة عن كل لقاح.";
    }

    if (text.includes("مركز") || text.includes("مستوصف")) {
        return "يمكنك معرفة أقرب مركز صحي من خلال خريطة المراكز داخل النظام.";
    }

    if (text.includes("طفل") || text.includes("معلومات طفل")) {
        return "انتقل إلى تبويب جدولي وهناك تتواجد البيانات المطلوبة.";
    }

    if (text.includes("دوام") || text.includes("وقت")) {
        return "ساعات الدوام من الساعة 8 صباحاً حتى 3 ظهراً.";
    }

    return "عذراً، لم أفهم سؤالك. يمكنك استخدام الأزرار أو كتابة سؤال آخر.";
}
</script>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
               <span class="text-primary">{{ __('messages.welcome1') }}</span>-{{ __('messages.welcome2') }}



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/index') }}">{{ __('messages.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/blog') }}">{{ __('messages.news') }}</a>
                            </li>

                              {{-- زر تغيير اللغة --}}
            <li class="nav-item">
              @php $locale = app()->getLocale(); @endphp
              @if ($locale == 'en')
                <a class="nav-link btn btn-success text-white px-3 py-1 ml-2" href="{{ route('lang.switch', 'ar') }}">العربية</a>
              @else
                <a class="nav-link btn btn-success text-white px-3 py-1 ml-2" href="{{ route('lang.switch', 'en') }}">English</a>
              @endif
            </li>

           {{-- تسجيل الدخول / تسجيل جديد --}}
            @if(Route::has('login'))
              @auth
                <li class="nav-item mx-2">
                  <a class="btn btn-success btn-sm" href="{{ url('/mychildren') }}">
                    {{ __('messages.scudual') }}
                  </a>
                </li>
                <li class="nav-item dropdown mx-2">
                  <a id="navbarDropdown" class="btn btn-success btn-sm dropdown-toggle" href="#" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('myappointment') }}">My Appointment</a>
                    <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                  </div>
                </li>
              @else
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">{{ __('messages.log2') }}</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-warning ml-lg-3" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                </li>
              @endauth
            @endif
          </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

   @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{ session()->get('message') }}
    </div>
  @endif


   {{-- HERO SECTION --}}
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">{{ __('messages.hero_sub') }}</span>
        <h1 class="display-4">{{ __('messages.hero_title') }}</h1>
        <a href="#" class="btn btn-primary">{{ __('messages.hero_btn') }}</a>
      </div>
    </div>
  </div>

  {{-- FEATURES --}}
  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white"><span class="mai-chatbubbles-outline"></span></div>
              <p><span>{{ __('messages.ability') }}</span></p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white"><span class="mai-shield-checkmark"></span></div>
              <p><span>{{ __('messages.one_health') }}</span></p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white"><span class="mai-basket"></span></div>
              <p><span>{{ __('messages.better_life') }}</span></p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

         {{-- ABOUT --}}
    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>{{ __('messages.about_title') }}</h1>
            <p class="text-grey mb-4">{{ __('messages.about_p1') }}</p>
            <p class="text-grey mb-4">{{ __('messages.about_p2') }}</p>
            <p class="text-grey mb-4">{{ __('messages.about_p3') }}</p>
            <a href="{{asset('html/about.html')}}" class="btn btn-primary">{{ __('messages.learn_more') }}</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->


  {{-- Include other sections --}}
  @include('user.doctor')
  @include('user.latest')
  @include('user.appointment')

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>الخريطة</h5>
                    <p class="footer-link mt-2">اعثر على أقرب مركز صحي</p>
                    <button onclick="openGoogleMaps()" class="btn btn-success btn-sm">
                        🗺️ افتح الخريطة
                    </button>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.company') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">{{ __('messages.about_us') }}</a></li>
            <li><a href="#">{{ __('messages.career') }}</a></li>
            <li><a href="#">{{ __('messages.editorial') }}</a></li>
            <li><a href="#">{{ __('messages.protection') }}</a></li>
          </ul>
        </div>
              <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.more') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">{{ __('messages.terms') }}</a></li>
            <li><a href="#">{{ __('messages.privacy') }}</a></li>
            <li><a href="#">{{ __('messages.advertise') }}</a></li>
            <li><a href="#">{{ __('messages.join_doctors') }}</a></li>
          </ul>
        </div>
                <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.partner') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
             <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{ __('messages.contact') }}</h5>
          <p class="footer-link mt-2">{{ __('messages.address') }}</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">{{ __('messages.social') }}</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

            </div>

            <hr>
      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All rights reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>