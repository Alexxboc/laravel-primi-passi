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
    $menuList = ['Home', 'About', 'Contacts', 'More', 'Address'];
    return view('home', compact('menuList'));
});

Route::get('/about', function () {
    $menuList = ['Home', 'About', 'Contacts', 'More', 'Address'];
    return view('about', compact('menuList'));
});

Route::get('/contacts', function () {
    $menuList = ['Home', 'About', 'Contacts', 'More', 'Address'];
    return view('contacts', compact('menuList'));
});

Route::get('/more', function () {
    $menuList = ['Home', 'About', 'Contacts', 'More', 'Address'];
    return view('more', compact('menuList'));
});

Route::get('/address', function () {
    $menuList = ['Home', 'About', 'Contacts', 'More', 'Address'];
    return view('address', compact('menuList'));
});




