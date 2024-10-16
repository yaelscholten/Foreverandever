<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-[1rem]">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email-adres')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full flex items-center justify-center">
                {{ __('Nieuwe gegevens aanvragen') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
