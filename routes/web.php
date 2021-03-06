<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return ('login');
});

Route::get('/logout', function () {
    return ('logout');
});

Route::get('/catalog', function () {
    return ('List Products');
});

Route::get('/catalog/show/{id}', function ($id) {
    return ('List Products By ID : '.$id);
});

Route::get('/catalog/create', function () {
    return ('Create Product');
});

Route::get('/catalog/edit/{id}', function ($id) {
    return ('Modify Product By ID : ' .$id);
});

