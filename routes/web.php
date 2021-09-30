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
    $creator_name = 'Simone';
    $creator_last_name = 'De Santis';

    return view('home', compact('creator_name', 'creator_last_name'));
})->name('home');
Route::get('/blog', function () {
    return view('articles.blog');
})->name('articolo');
