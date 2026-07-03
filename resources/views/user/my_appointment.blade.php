<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  
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
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">{{ ('messages.one') }}</span>-{{ ('messages.health') }}</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="{{ __('messages.enter_keyword') }}">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about_us') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/doctors') }}">{{ __('messages.doctors') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">{{ __('messages.news') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">{{ __('messages.contact') }}</a></li>

            @if(Route::has('login'))
              @auth
                <li class="nav-item">
                  <a class="nav-link btn btn-success text-white" href="{{ url('myappointment') }}">{{ __('messages.my_appointment') }}</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('messages.logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
              @else
                <li class="nav-item"><a class="btn btn-primary ml-2" href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                <li class="nav-item"><a class="btn btn-primary ml-2" href="{{ route('register') }}">{{ __('messages.register') }}</a></li>
              @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container my-5">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center">
        <thead class="bg-dark text-white">
          <tr>
            <th>{{ __('messages.doctor_name') }}</th>
            <th>{{ __('messages.date') }}</th>
            <th>{{ __('messages.message') }}</th>
            <th>{{ __('messages.status') }}</th>
            <th>{{ __('messages.cancel_appointment') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($appoint as $appoints)
            <tr>
              <td>{{ $appoints->doctor }}</td>
              <td>{{ $appoints->date }}</td>
              <td>{{ $appoints->message }}</td>
              <td>{{ $appoints->status }}</td>
              <td>
                <a class="btn btn-danger" onclick="return confirm('{{ __('messages.confirm_delete') }}')" href="{{ url('cancel_appoint',$appoints->id) }}">
                  {{ __('messages.cancel') }}
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>
</html>