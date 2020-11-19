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
    return view('home');
});

Route::get('/reflections', function () {
    return view('reflections');
});

Route::get('/agile', function () {
    return view('agile');
});

Route::get('project', function () {
    return view('project');
});

Route::get('crudapp', function () {
    return view('crudapp');
});
