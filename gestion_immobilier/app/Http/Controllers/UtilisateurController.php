<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BienvenueMail;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Compte.FormCreerCompte');
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
            'password' => 'required|min:6',
        ]);
    
        $utilisateur = new User($validatedData);
        if ($utilisateur->save()) {
            // Envoi de l'e-mail de bienvenue
            Mail::to($utilisateur->email)->send(new BienvenueMail($utilisateur));
            // Mail::to($utilisateur->user->email())->send(new BienvenueMail());
            return redirect()->route('user.edit');
        }
        
        
    }
    
    



    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('Articles.bizaimmoblier');
    }

    /**
     * Show the form for register the user .
     */
    public function edit()
    {
        
       return view( 'Compte.FormConnexion');
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
        // on recupere les information de l'utilisateur qui se connecte
        $useRole=User::where('email',$request->email)->get();
    // on verifie si l'utilsateur existe et est un admin
       if( $user == true && $useRole[0]->Role === "admin"){
        return redirect()->route('admin.index');
       }elseif($user == true && $useRole[0]->email !== "admin"){ // si il existe mais n'est pas admin
        return redirect()->route('article.home');
       }else{
        return back()->with('echouer' ,"veuilez creer un compte");
       }
        // if (!$user ) 
        // {
        //     return back()->with('echouer' ,"veuilez creer un compte");
            
        // } else
        // {
        //     return redirect()->route('article.home');
         
        // }
     }


     public function deconnexion()
     {
       
        if(Auth::logout() === null){
            return redirect()->route('user.edit'); 
        }else{
            return back()->with('success', 'comment tu es arrivé là, voleur sans te connecter');
        }
        
     

     }


     public function deconnexionUserLambda()
     {
       
        if(Auth::logout() === null){
            return redirect()->route('article.home'); 
        }else{
            return back();
        }
        
     

     }








    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function couverture()
    {
        
        return view('Articles.bizaimmoblier');
    

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}