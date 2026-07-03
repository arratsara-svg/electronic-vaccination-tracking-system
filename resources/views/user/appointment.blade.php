<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">{{ __('messages.make_appointment') }}</h1>

        @guest
            <!-- الفورم يظهر فقط للمستخدم غير المسجّل دخول -->
            <form class="main-form" action="{{ url('appointment') }}" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="{{ __('messages.full_name') }}" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="{{ __('messages.email_address') }}" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor" class="custom-select" required>
                            <option>{{ __('messages.select_doctor') }}</option>
                            @foreach($doctor as $doctors)
                                <option value="{{ $doctors->name }}">{{ $doctors->name }} -- {{ $doctors->speciality }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="number" class="form-control" placeholder="{{ __('messages.number') }}" required>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" class="form-control" rows="6" placeholder="{{ __('messages.message') }}"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">{{ __('messages.submit_request') }}</button>
            </form>
        @endguest

        @auth
            <!-- رسالة للمستخدم المسجّل دخول -->
            <div class="alert alert-warning mt-4 text-center">
                ⚠️ لا يمكنك حجز موعد أثناء تسجيل الدخول. لأنك لست مستخدم جديد  .
            </div>
        @endauth
    </div>
</div>