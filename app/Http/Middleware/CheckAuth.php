<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
    {
        if (!auth()->check()) {
            // L'utilisateur n'est pas connecté, rediregtion vers la page de connexion
            return redirect()->route('Seconnecter')->with('error', 'Vous devez vous connecter pour ajouter un commentaire.');
        }

        return $next($request);
    }
    }
}
