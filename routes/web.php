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
    $saluto = "Hello World";
    $stampa_immagine = true;
    $informazioni = ['8 Miliardi di abitanti', 'Massa: 5,972 × 10^24 kg', 'Età: 4,543 × 10^9 anni', 'Gravità: 9,807 m/s²', 'Raggio: 6.371 km', 'Distanza da Marte: 1,698 unità astronomiche'];
    return view('home', compact('saluto', 'stampa_immagine', 'informazioni'));

    return view('home');
});
