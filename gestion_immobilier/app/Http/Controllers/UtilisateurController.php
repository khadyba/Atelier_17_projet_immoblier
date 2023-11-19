<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Articles.PageAcceuil');
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
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'motdepasse' => 'required|min:6',
        ]);
    
        $utilisateur = new Utilisateurs($validatedData);
        $utilisateur->save();
        // Utilisateurs::create($utilisateur);
        return back()->with('success', 'Inscription réussie avec succès ! Vous pouvez maintenant vous connecter');
    }
    
    
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
       return view( 'Compte.seConnecter');
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