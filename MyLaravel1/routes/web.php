<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/ospiti', 'OspiteController@index') -> name('ospiti-index');
Route::get('/ospiti/{id}', 'OspiteController@show') -> name('ospiti-show');
Route::get('/create/ospiti', 'OspiteController@create') -> name('ospiti-create');
Route::post('/create/ospiti', 'OspiteController@store') -> name('ospiti-store');

Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');
Route::get('/paganti/{id}', 'PaganteController@show') -> name('paganti-show');

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanze/{id}', 'StanzaController@show') -> name('stanze-show');
Route::get('/create/stanze', 'StanzaController@create') -> name('stanze-create');
Route::post('/create/stanze', 'StanzaController@store') -> name('stanze-store');
