<?php

use Illuminate\Support\Facades\Route;

route::view('/','home')->name('home');

Route::resource('falla','fallacontroller')
->names('falla')
->parameters(['falla'=>'falla']);


Auth::routes([]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
