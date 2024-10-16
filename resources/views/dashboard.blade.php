<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-white leading-tight">
            {{ __('Mijn events') }}
        </h2>
    </x-slot>
    <div class="w-full h-auto py-[3rem]">
        <div class="max-w-[80rem] px-[1rem] mx-auto">
            <div class="w-full h-auto rounded-xl flex justify-between gao-[2rem]">
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Eventnaam</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Domeinnaam</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Geacepteerd</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Datum</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Online t/m</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Thema</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Status</h2>
                </div>
                <div class="w-[12.5%]">
                    <h2 class="font-bold">Preview</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
