<?php
use App\Http\Controllers\AnnuaireController;
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

Route::get('/', [AnnuaireController::class, 'annuaire'])->name('annuaire');
Route::get('/annuaires/{annuaire}', [AnnuaireController::class, 'show'])->name('annuaires.show');
Route::get('/categories/{category}', [AnnuaireController::class, 'annuairesByCategory'])->name('annuaires.byCategory');
Route::get('/tags/{tag}', [AnnuaireController::class, 'annuairesByTag'])->name('annuaires.byTag');
Route::get('/{annuaire}', [AnnuaireController::class, 'annuaire'])->name('annuaires.annuaire');
Route::get('/connexion', [AnnuaireController::class, 'pageConnexion'])->name('annuaires.pageConnexion');
