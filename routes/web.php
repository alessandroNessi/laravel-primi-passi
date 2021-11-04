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
    $data=[
        "nome"=>"alessandro",
        "cognome"=>"nessi",
        "proprietà"=>["casa","auto","computer"]
    ];
    return view('home', $data);
});

Route::get('/header_menu', function () {
    $data=[
        "refs"=>["","chi_sono","dettagli_oggetto"]
    ];
    return view('header_menu', $data);
});

Route::get('/chi_sono', function () {
    return view('chi_sono');
});

Route::get('/dettagli_oggetto', function () {
    return view('dettagli_oggetto');
});