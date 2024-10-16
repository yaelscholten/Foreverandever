<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    .hero-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }
  </style>
</head>
<body class="antialiased bg-[#dff4e1]">
    @include("shared.header")
    <section class="relative h-[80vh] py-[5rem]">
        <div class="max-w-[80rem] px-[1rem] h-full mx-auto flex items-end justify-start">
            <video autoplay loop muted playsinline class="hero-video">
            <source src="{{ asset('videos/home-hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0" style="background: linear-gradient(-60deg, rgba(111, 194, 118, 0.35) 0%, rgba(111, 194, 118, 0.80) 100%);"></div>
            <div class="relative w-full h-auto flex items-end">
                <div class="w-1/2 h-full">
                    <h1 class="text-[60px] font-[700] leading-[1] text-white">Jullie verhaal,<br>perfect online<br>verteld.</h1>
                </div>
                <div class="w-1/2 h-full flex items-end justify-end">
                    <a class="text-[15px] font-[500] flex items-center gap-[0.5rem] bg-[#6FC276] pr-[2rem] pl-[1.75rem] py-[0.75rem] hover:bg-[#5da563] transition text-white rounded" href="/login">
                    <svg fill="#fff" height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 345.184 345.184" xml:space="preserve">
                        <g>
                            <path d="M266.6,138.935c6.454-4.025,10.759-11.186,10.759-19.336c0-12.559-10.217-22.776-22.776-22.776
                                c-9.814,0-18.198,6.239-21.394,14.958c-9.102-5.089-18.901-9.073-29.22-11.76c0.535-0.438,1.065-0.875,1.585-1.307
                                c10.801-8.968,25.446-22.529,31.172-31.236c4.287-6.519,9.118-15.68,8.417-28.771C243.983,17.002,226.485,0,205.309,0
                                c-15.413,0-26.247,11.819-32.067,18.168c-0.167,0.182-0.34,0.371-0.516,0.562c-0.017-0.019-0.034-0.039-0.05-0.057
                                C167.354,12.612,156.281,0,139.874,0c-21.176,0-38.673,17.002-39.835,38.707c-0.547,10.234,2.05,19.108,8.419,28.773
                                c5.674,8.611,20.4,22.184,31.286,31.191c0.525,0.434,1.059,0.873,1.599,1.314c-10.366,2.687-20.208,6.685-29.348,11.795
                                c-3.196-8.72-11.58-14.958-21.394-14.958c-12.559,0-22.776,10.217-22.776,22.776c0,8.15,4.306,15.311,10.759,19.336
                                c-19.036,21.884-30.576,50.451-30.576,81.665c0,68.696,55.888,124.584,124.584,124.584S297.176,289.295,297.176,220.6
                                C297.176,189.386,285.635,160.819,266.6,138.935z M172.592,315.184c-52.154,0-94.584-42.43-94.584-94.584
                                s42.43-94.584,94.584-94.584s94.584,42.43,94.584,94.584S224.746,315.184,172.592,315.184z"/>
                        </g>
                    </svg>
                    Direct aan de slag
                    </a>   
                    <a class="text-[15px] font-[500] ml-[0.5rem] flex items-center gap-[0.5rem] bg-[#fff] pr-[2rem] pl-[1.75rem] py-[0.75rem] hover:bg-[#f1f1f1] transition rounded" href="/login">
                    <svg fill="#000" height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 345.184 345.184" xml:space="preserve">
                        <g>
                            <path d="M266.6,138.935c6.454-4.025,10.759-11.186,10.759-19.336c0-12.559-10.217-22.776-22.776-22.776
                                c-9.814,0-18.198,6.239-21.394,14.958c-9.102-5.089-18.901-9.073-29.22-11.76c0.535-0.438,1.065-0.875,1.585-1.307
                                c10.801-8.968,25.446-22.529,31.172-31.236c4.287-6.519,9.118-15.68,8.417-28.771C243.983,17.002,226.485,0,205.309,0
                                c-15.413,0-26.247,11.819-32.067,18.168c-0.167,0.182-0.34,0.371-0.516,0.562c-0.017-0.019-0.034-0.039-0.05-0.057
                                C167.354,12.612,156.281,0,139.874,0c-21.176,0-38.673,17.002-39.835,38.707c-0.547,10.234,2.05,19.108,8.419,28.773
                                c5.674,8.611,20.4,22.184,31.286,31.191c0.525,0.434,1.059,0.873,1.599,1.314c-10.366,2.687-20.208,6.685-29.348,11.795
                                c-3.196-8.72-11.58-14.958-21.394-14.958c-12.559,0-22.776,10.217-22.776,22.776c0,8.15,4.306,15.311,10.759,19.336
                                c-19.036,21.884-30.576,50.451-30.576,81.665c0,68.696,55.888,124.584,124.584,124.584S297.176,289.295,297.176,220.6
                                C297.176,189.386,285.635,160.819,266.6,138.935z M172.592,315.184c-52.154,0-94.584-42.43-94.584-94.584
                                s42.43-94.584,94.584-94.584s94.584,42.43,94.584,94.584S224.746,315.184,172.592,315.184z"/>
                        </g>
                    </svg>
                    Pakketten bekijken
                    </a>   
                </div>
            </div>
        </div>
    </section>
</body>
</html>