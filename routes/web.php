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
    return view('index');
});
Route::get('/NouvelleDestination', function () {
    return view('newdestination');
});
Route::post('/NouvelleDestination', 'DestinationController@NouvelleDestination');

Route::get('/CV', function () {
    return view('generateurcv');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/gestion', function () {
    return view('admin-gestion');
});

Route::get('/ex', function () {
    return view('example');
});

Route::get('/Profil', function () {
    return view('profil');
});
Route::get('/GestionDestinations', 'DestinationController@liste');
Route::post('/GestionDestinations', 'DestinationController@suppDestination');

Route::get('/auth/login', "AuthController@login");
Route::get('/auth/logout', "AuthController@logout");

Route::get("/{nom}", "DestinationController@affichageDestination");
Route::get("/edit/{nom}", "DestinationController@affichageEdition");
Route::post("/edit/{nom}",['as' => 'editDestination', 'uses' => 'DestinationController@editDestination']);




?>