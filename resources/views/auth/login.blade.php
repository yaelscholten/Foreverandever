<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-[1rem]">
        @csrf
        <div>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Wachtwoord')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded bg-[#f1f1f1] border-gray-300 checked:bg-[#6FC276] focus:border-none" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Onthoud deze gegevens om sneller in te loggen') }}</span>
                </label>
            </div>
        </div>
        <div class="flex flex-col items-center justify-end mt-4">
            <div class="flex items-center gap-[2rem] mb-[1rem]">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('register') }}">
                    {{ __('Account aanmaken') }}
                </a>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif
            </div>
            <x-primary-button class="w-full flex items-center justify-center">
                {{ __('Inloggen') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
