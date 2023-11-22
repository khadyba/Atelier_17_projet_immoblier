<?php

use App\Http\Controllers\AticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeController;
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

Route::get('/ajouterArticle', [UtilisateurController::class, 'index'])->middleware(['auth', 'auth.check']);
// route pour se créer un compte
Route::post('/creerCompte', [UtilisateurController::class, 'store']);

Route::get('/creerCompte', [UtilisateurController::class, 'create']);

Route::get('/Seconnecter', [UtilisateurController::class, 'edit'])->name('Seconnecter');
Route::post('/connection', [UtilisateurController::class, 'connection']);

Route::get('/listeartilces', [AticleController::class, 'index']);

Route::get('/articles/detail/{id}', [AticleController::class, 'show']);
Route::get('/commentaire/ajouter/{id}', [CommentaireController::class, 'store'])->middleware('auth.check');

Route::get('/deconnexion', [UtilisateurController::class, 'deconnexion'])->name('deconnexion');

// les routes admin ici
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AticleController::class, 'index'])->name('index');
    Route::get('/Article/create', [AticleController::class, 'create'])->name('create');
    Route::post('/Article/store', [AticleController::class, 'store'])->name('store');
    Route::get('/Article/editer/{id}', [AticleController::class, 'edit'])->name('edit');
    Route::post('/Article/modifier/{id}', [AticleController::class, 'update'])->name('update');
    Route::post('/Article/supprimer/{id}', [AticleController::class, 'destroy'])->name('destroy');
});

//Route pour la vue des articles et des leurs details en form de card

Route::prefix('article')->name('article.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/detail/{id}', [HomeController::class, 'show'])->name('show');
});





// Route::get('/acceuil', [UtilisateurController::class, 'index']);
// Route::get('/creerCompte',[UtilisateurController::class,'create']);
// Route::get('/Seconnecter', [UtilisateurController::class, 'edit']);


// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__ . '/auth.php';
