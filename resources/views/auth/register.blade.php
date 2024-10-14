<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-4">
        <label for="event_naam" class="block text-sm font-medium text-gray-700">Event naam</label>
        <input id="event_naam" type="text" name="event_naam" value="{{ old('event_naam') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="voornaam_partner_1" class="block text-sm font-medium text-gray-700">Voornaam Partner 1</label>
        <input id="voornaam_partner_1" type="text" name="voornaam_partner_1" value="{{ old('voornaam_partner_1') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="achternaam_partner_1" class="block text-sm font-medium text-gray-700">Achternaam Partner 1</label>
        <input id="achternaam_partner_1" type="text" name="achternaam_partner_1" value="{{ old('achternaam_partner_1') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="voornaam_partner_2" class="block text-sm font-medium text-gray-700">Voornaam Partner 2</label>
        <input id="voornaam_partner_2" type="text" name="voornaam_partner_2" value="{{ old('voornaam_partner_2') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="achternaam_partner_2" class="block text-sm font-medium text-gray-700">Achternaam Partner 2</label>
        <input id="achternaam_partner_2" type="text" name="achternaam_partner_2" value="{{ old('achternaam_partner_2') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="trouwdatum" class="block text-sm font-medium text-gray-700">Trouwdatum</label>
        <input id="trouwdatum" type="date" name="trouwdatum" value="{{ old('trouwdatum') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
        <input id="telefoonnummer" type="text" name="telefoonnummer" value="{{ old('telefoonnummer') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="domeinnaam" class="block text-sm font-medium text-gray-700">Domeinnaam (.foreverandever.nl)</label>
        <input id="domeinnaam" type="text" name="domeinnaam" value="{{ old('domeinnaam') }}" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
        <input id="password" type="password" name="password" required class="mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Bevestig Wachtwoord</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full">
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Registreer</button>
</form>

</x-guest-layout>
