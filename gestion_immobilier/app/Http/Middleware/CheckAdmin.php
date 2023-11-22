<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié et s'il a le rôle d'admin
        if ($request->user()->Role !==('admin') ){
            return redirect()->route('/listeartilces'); 
            
           
        }else{
        //  return redirect()->route('creerCompte'); 
        return $next($request);
        }
     
       
    }
    
    
}
