<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarsController;

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
    return view('welcome', [
        'name' => request('name') ?? 'Person'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/guitars', 'App\Http\Controllers\GuitarsController@index')->name('guitars.index');
Route::get('/guitars/create', 'App\Http\Controllers\GuitarsController@create')->name('guitars.create');
Route::get('/guitars/{guitar}', 'App\Http\Controllers\GuitarsController@show')->name('guitars.show');
Route::post('/guitars', 'App\Http\Controllers\GuitarsController@store')->name('guitars.store');

