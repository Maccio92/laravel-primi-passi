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



// A questo punto, iniziamo a prendere confidenza con le rotte e le views:
// cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
// Facciamo quindi sì che la rotta / visualizzi home.blade.php
// Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

Route::get('/', function () {
    $data = [
        'name' => 'Aldo',
        'lastname' => 'Baglio',
        'cittadinanza' => 'italiana',
    ];
    return view('home', $data);
});

Route::get('/resources/views/contact.blade.php', function () {
    return view('contact');
});
Route::get('/resources/views/about.blade.php', function () {
    return view('about');
});