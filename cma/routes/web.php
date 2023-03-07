<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/edit/{id_title}/{id_subtitle}/{subtitle}', 'App\Http\Controllers\HomeController@edit')->name('edit');

Route::post('/submit_note', 'App\Http\Controllers\HomeController@submit_note')->name('submit_note');

Route::get('/subject', 'App\Http\Controllers\HomeController@subject')->name('subject');

Route::post('/submit_formSubject', 'App\Http\Controllers\HomeController@submitFormSubject')->name('submit_formSubject');
