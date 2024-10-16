<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-white leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>
    <div class="w-full h-auto py-[5rem]">
        <div class="max-w-[80rem] px-[1rem] mx-auto">
            <h1 class="text-xl font-[500] pb-[2rem]">Welkom {{ Auth::user()->name }}</h1>
            <div class="w-full h-auto flex gap-[2rem]">
                <div class="w-1/2 h-full ratio-1-2 bg-red-500 rounded-xl"></div>
                <div class="w-1/2 h-full ratio-1-2 bg-red-500 rounded-xl"></div>
            </div>
        </div>
    </div>
</x-app-layout>
