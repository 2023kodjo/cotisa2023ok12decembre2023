<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        
        $request->authenticate();

        $request->session()->regenerate();

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

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
