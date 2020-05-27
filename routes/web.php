<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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
    return view('accueil');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cvs' , 'CvController');

/*
Route::get('/home', 'HomeController@index');
Route::get('cvs' , 'CvController@index');
Route::get('cvs/create' , 'CvController@create');
Route::Post('cvs' , 'CvController@store');
Route::put('cvs/{id}' , 'CvController@update');
Route::get('cvs/{id}/edit' , 'CvController@edit');
Route::delete('cvs/{id}' , 'CvController@destroy');
/*fin */
Route::resource('offres' , 'OffreController');
/*les routes d'emploi*/
Route::resource('/emplois' , 'EmploiController');
/*fin*/

Route::resource('etudiants' , 'EtudiantController');
/*la route de la notes*/
Route::resource('notes' , 'NoteController');

/*la route pour upload des fichier au dropbox*/
Route::get('/upload','DropboxController@uploadToDropbox');
Route::post('/upload_to_dropbox','DropboxController@uploadToDropboxFile');

/*end */

/*Etudiant Auth route*/
Route::namespace('Etudiant')->group(function(){
    Route::get('/etudiant/home', 'EtudiantController@index')->name('etudiant.home');
 });
 
/*User Auth route*/
Route::namespace('User')->group(function(){
    Route::get('/user/home', 'UserController@index')->name('user.home');
 });
/*Entreprise Auth route*/
Route::namespace('Entreprise')->group(function(){
    Route::get('/entreprise/home', 'EntrepriseController@index')->name('entreprise.home');
 });
 
/*Enseignat Auth route*/
Route::namespace('Enseignant')->group(function(){
    Route::get('/enseignant/home', 'EnseignantController@index')->name('enseignant.home');
 });
 
/*Admin Auth route
Route::namespace('Admin')->group(function(){
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
    //Route::get('/admin/admin', 'AdminController@index')->name('admin.admin');
 });*/

 /**** */
Route::get('/home', function () {
    switch(\Illuminate\Support\Facades\Auth::user()->role_id){
        case 1:
            return redirect(route('admin.home'));
            break;
        case 2:
            return redirect(route('user.home'));
            break;
        case 3:
            return redirect(route('etudiant.home'));
            break;
        case 4:
                return redirect(route('enseignant.home'));
                break;
        case 5:
            return redirect(route('entreprise.home'));
            break;
        default:
            return '/login';
            break;
    }
});