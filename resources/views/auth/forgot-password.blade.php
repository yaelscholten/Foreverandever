<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-[1rem]">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Emailgit')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            <div class="flex items-center gap-[2rem] mb-[1rem]">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('register') }}">
                    {{ __('Account aanmaken') }}
                </a>
                <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('login') }}">
                    {{ __('Inloggen') }}
                </a>
            </div>
            <x-primary-button class="w-full flex items-center justify-center">
                {{ __('Nieuwe gegevens aanvragen') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
