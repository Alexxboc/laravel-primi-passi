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
    $data = ['Learn php', 'Learn laravel', 'Learn css', 'Learn html', 'Learn javascript', 'Learn VueJs'];
    return view('home', compact('data'));
})->name('home');

Route::get('/about', function () {

    return view('about');
})->name('about');

Route::get('/contacts', function () {

    return view('contacts');
})->name('contacts');

Route::get('/more', function () {

    return view('more');
})->name('more');

Route::get('/address', function () {

    return view('address');
})->name('address');




