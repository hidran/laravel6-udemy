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
    return ['Hello','world'];
});
Route::get('/{name?}/{lastname}', function ($name, $lastname) {
    return '<h1>Hello World '.$name.' '.$lastname;
});
