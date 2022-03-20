<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('connexion');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/dash_etu', function () {
    return view('dashboard_etudiant');
});
Route::get('/dash_ens', function () {
    return view('dashboard_enseignant');
});
Route::get('/dash_pers', function () {
    return view('dashboard_personnel');
});
Route::get('/profil_etu', function () {
    return view('profil_etudiant');
});
Route::get('/profil_ens', function () {
    return view('profil_enseignant');
});
Route::get('/profil_pers', function () {
    return view('profil_personnel');
});
Route::get('/faire_demande_evaluation', function () {
    return view('faire_demande_evaluation');
});
Route::get('/faire_demande_reclamation', function () {
    return view('faire_demande_reclamation');
});
Route::get('/faire_demande_evaluation','App\Http\Controllers\EvaluationRequestController@show')->name('ues');
Route::get('/faire_demande_reclamation','App\Http\Controllers\ComplaintRequestController@show');
// Route::post('/faire_demande_reclamation','App\Http\Controllers\ComplaintController@create_demande')->name('plainte_created');
// Route::get('/voir_details_demande_evaluation','App\Http\Controllers\ComplaintController@show')->name('plaint_vue');
Route::get('/voir_details_demande_reclamation', function () {
    return view('voir_details_demande_reclamation');
});
Route::get('/voir_liste_demandes_evaluation', function () {
    return view('voir_liste_demandes_evaluation');
});
Route::get('/voir_liste_demandes_reclamation', function () {
    return view('voir_liste_demandes_reclamation');
});


