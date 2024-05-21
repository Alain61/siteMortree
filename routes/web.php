<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnuaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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
//route pour récupérer le formulaire d'inscription
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//route pour soumettre le formulaire d'inscription de 'register.blade'
Route::post('/register', [RegisterController::class, 'register']);
//route pour récupérer le formulaire de connexion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//route pour soumettre le formulaire de connexion
Route::post('/login', [LoginController::class, 'login']);
//route pour se déconnecter
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//partie à verifier!!
//route pour recuperer le formulaire de contact//fonctionnel
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
//route pour soumettre le formulaire de contact
Route::post('/contact', [ContactController::class, 'envoyer'])->name('envoyer');

Route::get('/home', [HomeController::class, 'monCompte'])->name('mon-compte');
Route::get('/new_comment_notification', [homeController::class, 'create'])->name('new_comment_notification');


//route pour renvoyer sur la page d'accueil de l'espace membre après inscription. Il faut conserver le '/home' car laravel défini ainsi la page d'accueil de 'l'espace membre'
Route::get('/home', [HomeController::class, 'index'])->name('home');


//route pour récupérer la nouvelle page d'accueil
Route::get('/', [PageController::class, 'accueil'])->name('accueil');//ajouté
//route pour récupére la page d'accueil( pour le moment c la page 'annuaire')
Route::get('/annuaire', [AnnuaireController::class, 'annuaire'])->name('annuaire');//changé
//route pour récupérer la page par entité
Route::get('/annuaires/{annuaire}', [AnnuaireController::class, 'show'])->name('annuaires.show');
//route pour récupére l'annuaire par catégories
Route::get('/categories/{category}', [AnnuaireController::class, 'annuairesByCategory'])->name('annuaires.byCategory');
//route pour récupérer l'annuaire par horaires et jours d'ouverture
Route::get('/tags/{tag}', [AnnuaireController::class, 'annuairesByTag'])->name('annuaires.byTag');
//route pour le champ de recherche
Route::get('/{annuaire}', [AnnuaireController::class, 'annuaire'])->name('annuaires.annuaire');
//route pour récupérer la page de connexion
Route::get('/connexion', [AnnuaireController::class, 'pageConnexion'])->name('annuaires.pageConnexion');
