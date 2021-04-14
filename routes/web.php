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

Route::get('/1', function () {
    return view('welcome');
});


//formulaire de connexion pour l'apprenant
Route::get('/apprn', function () {
    return view('auth.connexion');
});



//Espade des differents élèves
Route::get('/appr', function () {
    return view('Espace_apprn');
});


//route pour afficher ma page d'accueil en moitié
Route::get('/header', function () {
    return view('include.header');
});

//pour mon footer route qui permet de l'affichage
Route::get('/foot', function () {
    return view('include.footer');
});

//pour afficher le message par session
Route::get('/redirecte', 'UserController@apres_inscription')->name('message_flash');

//Route pour afficher nos page d'accueil 
Route::get('/','AuthentificationController@index')->name('accueil');


//Ma route pour afficher enregistré dans la base de donnée 
Route::post('/inscription', 'UserController@user_store')->name('user.store');


//Pour mon espace admin le professeur
Route::get('/Espace_prof', 'AuthentificationController@espace_prof')->name('Admin');

// //pour la connection pour l'affichage
// Route::get('/conn', 'HomeController@connection')->name('supadmin');


//pour afficher mon dashbord super admin le directeur de l'etablissement
Route::get('/bashbord', 'AuthentificationController@dashboard')->name('superadmin');



//Liste des eleves inscrit durant l'annee scolaire 
Route::get('/liste_prof','AuthentificationController@professeur')->name('list.prof');


//Liste des professeurs Ajouter par le super admin 
Route::get('/liste_eleve','AuthentificationController@eleve')->name('list.eleve');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');