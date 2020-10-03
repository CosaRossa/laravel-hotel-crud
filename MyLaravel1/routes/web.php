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
