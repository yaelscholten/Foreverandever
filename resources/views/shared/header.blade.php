<style>
        * {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            height: auto;
        }

        .content-container {
            max-width: 1400px;
            height: 100%;
            margin: 0 auto;
            width: 100%;
        }

        .activity-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .activity-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .activity-card.selected {
            border: 2px solid #FF0000;
            /* rode rand om geselecteerde kaart */
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(255, 0, 0, 0.3);
        }

        .activity-card img {
            transition: transform 0.3s ease;
        }

        .activity-card:hover img {
            transform: scale(1.1);
        }
    </style>
    <div class="w-full h-[100px] fixed z-[100] left-0 right-0 top-0 bg-white">
        <div class="max-w-[1400px] h-full mx-auto flex items-center justify-between">
            <a href="/"><img src="{{ Vite::asset('resources/images/Actievadis-header-logo.png') }}" /></a>
            <ul class="flex gap-[1.5rem]  ">
                <li><a class="text-[15px] font-bold" href="/">Home</a></li>
                <li><a class="text-[15px] font-bold" href="/activiteiten">Activiteiten</a></li>
                <li><a class="text-[15px] font-bold bg-[#F9B123] p-3 text-white rounded" href="/login">Aanmelden</a>
                </li>
            </ul>
        </div>
    </div>