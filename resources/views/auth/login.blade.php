<x-guest-layout>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/vaccine-baby.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center -50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.1); /* شفافية خفيفة */
            backdrop-filter: blur(12px); /* تغبيش */
            -webkit-backdrop-filter: blur(12px); /* دعم Safari */
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            max-width: 400px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2); /* إطار خفيف */
            color: white; /* نص أبيض */
        }

        .login-box h2 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label, a, .text-sm, .text-gray-600 {
            color: #f1f1f1 !important;
        }

        input {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .text-green-600 {
            color: #a3f9a3;
        }

        .text-blue-600 {
            color: #66ccff;
        }

        .text-blue-600:hover {
            text-decoration: underline;
        }
    </style>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-label for="email" value="{{ ('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="form-group">
                    <x-label for="password" value="{{ ('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="form-group flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ ('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                            {{ ('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="form-group">
                    <x-button class="w-full justify-center">
                        {{ __('Log in') }}
                    </x-button>
                </div>

                <div class="text-center mt-2">
                    <p class="text-sm">{{ ("Don't have an account?") }} 
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">{{ ('Register') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>