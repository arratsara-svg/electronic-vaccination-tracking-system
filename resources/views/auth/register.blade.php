
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

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            max-width: 500px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        label, .text-sm, a {
            color: #f1f1f1 !important;
        }

        input {
            background-color: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            width: 100%;
            padding: 0.5rem;
            border-radius: 8px;
            margin-top: 0.25rem;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        input:focus {
            outline: none;
            border-color: #66ccff;
            box-shadow: 0 0 0 2px rgba(102, 204, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.2);
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

    <div class="register-container">
        <div class="register-box">
            <h2 class="text-center text-xl font-bold mb-4 text-white">Register</h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Your Name" />
                </div>

                <div class="mb-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" type="email" name="email" :value="old('email')" required placeholder="you@example.com" />
                </div>

                <div class="mb-4">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" type="text" name="phone" :value="old('phone')" required placeholder="+963..." />
                </div>

                <div class="mb-4">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" type="text" name="address" :value="old('address')" required placeholder="City - Street" />
                </div>

                <div class="mb-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="****" />
                </div>

                <div class="mb-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="****" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())

Photographer sara, [12/01/47 07:17 م]
<div class="mb-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
                                <div class="ms-2 text-sm">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a href="'.route('terms.show').'" class="underline text-blue-400 hover:text-blue-600" target="_blank">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a href="'.route('policy.show').'" class="underline text-blue-400 hover:text-blue-600" target="_blank">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <a class="underline text-sm text-blue-400 hover:text-blue-600" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>