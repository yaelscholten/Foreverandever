<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="w-full h-screen flex">
            <div style="background-image: url('{{ asset('fotos/login-imgage.jpg') }}');" class="w-1/2 h-full bg-center bg-cover"></div>
            <div class="w-1/2 h-full">
                <div class="h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#ebfaec]">
                    <div>
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </div>

                    <div class="w-full sm:max-w-md mt-6 p-[2rem] bg-white overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
