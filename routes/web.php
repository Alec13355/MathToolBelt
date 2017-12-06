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

Route::get('/pi', function () {
    return view('pi');
});

Route::get('/integrate', function() {
    return view('integration');
});

Route::post('/calcPi', 'Computation@calculatePi');

Route::post('/calcNumericalIntegration', 'Computation@calculateNumericalIntegration');
