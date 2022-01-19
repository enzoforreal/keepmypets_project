<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PagesController::class, 'Accueil']);

Route::get('/MonCompte',[PagesController::class, 'MonCompte']);

Route::get('/apropos',[PagesController::class, 'apropos']);

Route::get('/NosServices',[PagesController::class, 'NosServices']);

Route::get('/DevenirPetSitter',[PagesController::class, 'DevenirPetSitter']);

Route::get('/Administration',[PagesController::class, 'Administration']);

Route::get('/inscription',[InscriptionController::class,'inscription']);

Route::post('/inscription',[InscriptionController::class,'FormulaireRecu']);

Route::get('/connexion',[ConnexionController::class, 'formulaire']);  // route affichage formulaire

 Route::post('/connexion' , [ConnexionController::class,'traitement']);   // route traitement formulaire

Route::get('/SeDeconnecter',[PagesController::class, 'SeDeconnecter']);  

Route::get('/CreerCompte',[PagesController::class, 'CreerCompte']);

Route::get('/Faq',[PagesController::class, 'Faq']);