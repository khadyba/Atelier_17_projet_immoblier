<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Articles.ajouterArticle');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Compte.creerCompte');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $utilisateur = new User($validatedData);
        $utilisateur->save();
        // Utilisateurs::create($utilisateur);
        return back()->with('success', 'Inscription réussie avec succès ! Vous pouvez maintenant vous connecter');
    }
    
    
    


    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('Articles.bizaimmoblier');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
       return view( 'Compte.seConnecter');
    }

     public function connection(Request $request)
     {
        // dd($request->all());    
        $user = Auth::attempt
        (
            [
                'email' => $request->email, 
                'password' => $request->motdepasse
            ]
        );
        if (!$user) 
        {
            return back()->with('echouer' ,"veuilez creer un compte");
            
        } else
        {
            return view('Articles.PageAcceuil');
         
        }
     }


     public function deconnexion()
     {
         Auth::logout();
         return redirect('/listeartilces'); 
     

     }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}