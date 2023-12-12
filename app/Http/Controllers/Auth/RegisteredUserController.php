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
        $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'matricule' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'matricule' => $request->matricule,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        
        Auth::login($user);

        $user = Auth::user(); // Récupérer l'utilisateur authentifié

        // Vérifier le rôle de l'utilisateur et rediriger en conséquence
        if ($user->role === 'admin') {
            return redirect()->route('admin_dashboard');  // Rediriger l'administrateur vers le tableau de bord d'administration
        } elseif ($user->role === 'employe') {
            return redirect()->route('employe_dashboard'); // Rediriger les "cnns" vers leur tableau de bord
        }
        elseif ($user->role === 'employeur') {
            return redirect()->route('employeur_dashboard'); // Rediriger les "cnns" vers leur tableau de bord
        }
        elseif ($user->role === 'retraite') {
            return redirect()->route('retraite_dashboard'); // Rediriger les "cnns" vers leur tableau de bord
        }
        elseif ($user->role === 'cnss') {
            return redirect()->route('cnss_dashboard'); // Rediriger les "cnns" vers leur tableau de bord
        }
    }

    
}
