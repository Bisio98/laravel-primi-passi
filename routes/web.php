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
    $data = [
        'title' => 'Homepage',
        'subtitle' => 'index'
    ];

    return view('homepage', $data);
})->name('homepage');

Route::get('/other', function () {
    return view('other');
})->name('other');

Route::get('/news', function() {
    return view('news');
})->name('news');


Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');