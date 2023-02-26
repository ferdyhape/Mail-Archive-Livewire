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
    return view('index', [
        'request' => 'dashboard'
    ]);
})->name('index.dashboard');

Route::get('/archive', function () {
    return view('index', [
        'request' => 'archive'
    ]);
})->name('index.dashboard.archive');

Route::get('/category', function () {
    return view('index', [
        'request' => 'category'
    ]);
})->name('index.dashboard.category');

Route::get('/activity', function () {
    return view('index', [
        'request' => 'activity'
    ]);
})->name('index.dashboard.activity');
