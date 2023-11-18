<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est authentifié et s'il a le rôle d'admin
        if ($request->user() && $request->user()->role !== 'admin') {
            // Redirige vers une vue ou une URL spécifique pour les utilisateurs non admins
            return redirect()->route('creer-compte'); // Remplacez 'creer-compte' par le nom de la route pour créer un compte
        }
        return $next($request);
    }
}
