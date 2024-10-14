<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validatie van alle velden
        $request->validate([
            'event_naam' => ['required', 'string', 'max:255'],
            'voornaam_partner_1' => ['required', 'string', 'max:255'],
            'achternaam_partner_1' => ['required', 'string', 'max:255'],
            'voornaam_partner_2' => ['required', 'string', 'max:255'],
            'achternaam_partner_2' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'trouwdatum' => ['required', 'date'],
            'telefoonnummer' => ['required', 'string', 'max:15'],
            'domeinnaam' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Gebruiker aanmaken met de extra velden
        $user = User::create([
            'event_naam' => $request->event_naam,
            'voornaam_partner_1' => $request->voornaam_partner_1,
            'achternaam_partner_1' => $request->achternaam_partner_1,
            'voornaam_partner_2' => $request->voornaam_partner_2,
            'achternaam_partner_2' => $request->achternaam_partner_2,
            'email' => $request->email,
            'trouwdatum' => $request->trouwdatum,
            'telefoonnummer' => $request->telefoonnummer,
            'domeinnaam' => $request->domeinnaam,
            'password' => Hash::make($request->password),
        ]);

        // Gebruiker geregistreerd event triggeren
        event(new Registered($user));

        // Automatisch inloggen na registratie
        Auth::login($user);

        // Redirect naar de gewenste locatie
        return redirect(RouteServiceProvider::HOME);
    }
}
