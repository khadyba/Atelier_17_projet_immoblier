<?php

use App\Http\Controllers\AticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('Articles.PageAcceuil');
// })->middleware(['auth', 'verified'])->name('Articles.PageAcceuil');

Route::get('/ajouterArticle', [UtilisateurController::class,'index'])->middleware(['auth','auth.check']);

Route::post('/creerCompte',[UtilisateurController::class,'store']);

Route::get('/creerCompte',[UtilisateurController::class,'create']);

Route::get('/Seconnecter', [UtilisateurController::class,'edit'])->name('Seconnecter');
Route::post('/connection', [UtilisateurController::class,'connection']);

Route::get('/listeartilces', [AticleController::class,'index']);

Route::get('/articles/detail/{id}', [AticleController::class,'show']);
Route::get('/commentaire/ajouter/{id}', [CommentaireController::class,'store'])->middleware('auth.check');

Route::get('/deconnexion', [UtilisateurController::class,'deconnexion'])->name('deconnexion');








    // Route::get('/acceuil', [UtilisateurController::class, 'index']);
    // Route::get('/creerCompte',[UtilisateurController::class,'create']);
    // Route::get('/Seconnecter', [UtilisateurController::class, 'edit']);
    

    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__.'/auth.php';
