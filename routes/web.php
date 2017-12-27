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
    return view('home.initial');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/about/us', function () {
    return view('aboutUs.aboutUs');
});

Route::get('/philosophies', function () {
    return view('philosophies.philo');
});

Route::get('/projects', function () {
    return view('projects.projects');
});
