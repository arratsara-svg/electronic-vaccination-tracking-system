<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('messages.profile') }}
        </h2>
    </x-slot>

    <div class="min-h-screen py-12 bg-gradient-to-br from-blue-100 to-purple-200">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">

            <div class="p-6 bg-white shadow-md rounded-2xl">
                <h3 class="mb-4 text-lg font-semibold text-gray-700">{{ __('messages.account_information') }}</h3>
                @livewire('profile.update-profile-information-form')
            </div>

            <div class="p-6 bg-white shadow-md rounded-2xl">
                <h3 class="mb-4 text-lg font-semibold text-gray-700">{{ __('messages.update_password') }}</h3>
                @livewire('profile.update-password-form')
            </div>

            <div class="p-6 bg-white shadow-md rounded-2xl">
                <h3 class="mb-4 text-lg font-semibold text-gray-700">{{ __('messages.two_factor_authentication') }}</h3>
                @livewire('profile.two-factor-authentication-form')
            </div>

            <div class="p-6 bg-white shadow-md rounded-2xl">
                <h3 class="mb-4 text-lg font-semibold text-gray-700">{{ __('messages.browser_sessions') }}</h3>
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <div class="p-6 bg-red-100 border border-red-300 shadow-md rounded-2xl">
                <h3 class="mb-4 text-lg font-semibold text-red-800">{{ __('messages.delete_account') }}</h3>
                @livewire('profile.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>