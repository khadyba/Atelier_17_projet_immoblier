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




// route pour la connexion et l'inscription

Route::prefix('authentification')->name('user.')->group(function () {
    Route::get('/creerCompte', [UtilisateurController::class, 'create'])->name('create');
    Route::get('/Seconnecter/form', [UtilisateurController::class, 'edit'])->name('edit');
    Route::post('/connection', [UtilisateurController::class, 'connection'])->name('connection');
    Route::post('/creerCompte/store', [UtilisateurController::class, 'store'])->name('store');
    Route::get('/deconnexion', [UtilisateurController::class, 'deconnexion'])->name('deconnexion');
    Route::get('/deconnexionUserLambda', [UtilisateurController::class, 'deconnexionUserLambda'])->name('deconnexionUserLambda');
});

// Route::get('/',[AticleController::class, 'index'])->name('index')->middleware('isadmin');
// les routes pour l'admin ici
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AticleController::class, 'index'])->name('index')->middleware(['auth', 'isadmin']);
    Route::get('/Article/create', [AticleController::class, 'create'])->name('create')->middleware(['auth', 'isadmin']);
    Route::post('/Article/store', [AticleController::class, 'store'])->name('store')->middleware(['auth', 'isadmin']);
    Route::get('/Article/editer/{id}', [AticleController::class, 'edit'])->name('edit')->middleware(['auth', 'isadmin']);
    Route::post('/Article/modifier/{id}', [AticleController::class, 'update'])->name('update')->middleware(['auth', 'isadmin']);
    Route::post('/Article/supprimer/{id}', [AticleController::class, 'destroy'])->name('destroy')->middleware(['auth', 'isadmin']);
});


//Route pour la vue des articles et de leurs details en form de card accesible a tout le monde

Route::prefix('article')->name('article.')->group(function () {
    Route::get('/', [HomeController::class, 'homePage'])->name('home');

    Route::get('/listeArticle', [HomeController::class, 'index'])->name('index');
    Route::get('/detail/{id}', [HomeController::class, 'show'])->name('show');
});
// route pour les commentaires
Route::prefix('commentaires')->name('commentaire.')->group(function () {
    Route::post('/commentaire/store/', [CommentaireController::class, 'store'])->name('store')->middleware('auth.check');
    Route::get('/commentaire/edit/{id}', [CommentaireController::class, 'edit'])->name('edit');
    Route::post('/commentaire/update/{id}', [CommentaireController::class, 'update'])->name('update');
    Route::post('/commentaire/delete/{id}', [CommentaireController::class, 'destroy'])->name('destroy')->middleware(['auth', 'isadmin']);
});






require __DIR__ . '/auth.php';
