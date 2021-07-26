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
});

Route::get('/about', function () {
    return 'About'; //view('welcome');
});

Route::get('/guitars/{guitar}', 'App\Http\Controllers\GuitarsController@show');