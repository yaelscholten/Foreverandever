<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[80rem] mx-auto px-[1rem]">
            <div class="w-full h-auto flex gap-[4rem]">
                <div class="w-1/2 h-full">
                    <div class="p-4 sm:p-8 bg-white rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-full">
                    <div class="p-4 sm:p-8 bg-white rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
