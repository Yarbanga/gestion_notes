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
Route::get('/dashbord', 'AuthentificationController@dashboard')->name('superadmin');



//Liste des eleves inscrit durant l'annee scolaire 
Route::get('/liste_prof','UserController@professeur')->name('list.prof');



//Liste pour pouvoir avoir accès à la liste des trimestre ou soit semestre 
Route::get('/liste_inf','AuthentificationController@annee')->name('list.ann');



//Route pour enregistrer dans la base de donnée  un prof
Route::post('/ajouterProf','UserController@store')->name('profstore');


//Route pour enregistrer dans la base de donnée un eleve
Route::post('/ajoutereleve','UserController@eleve_store')->name('eleve_store');


//Liste des eleves Ajouter par le super admin 
Route::get('/liste_eleve','UserController@eleve')->name('list.eleve');



//route pour faire des request dans ma base de donnée pour le choix de l'année soit trimestre soit année
Route::post('/ajouteannée','AuthentificationController@store')->name('choix_store');



//route pour afficher nos liste de choix de matiere
Route::get('/liste_matiere','MatiereClasseController@matiere')->name('list.matiere');

//route pour afficher l'espace apprenants
Route::get('/Espace_apprn','AuthentificationController@apprenants')->name('espace_apprenant');


//pour enregistrer dans la base de donner les choix des matieres par classe
Route::post('/ajoutmatiere','MatiereClasseController@choix_store')->name('choix_store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');