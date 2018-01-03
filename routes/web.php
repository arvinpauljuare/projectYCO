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

Route::get('/home', 'adminController@home');
Route::get('/about/us', 'adminController@aboutUs');

Route::get('/philosophies', function () {
    return view('philosophies.philo');
});

Route::get('/optimum', 'adminController@optimumPage');
Route::get('/ycodesign', 'adminController@ycoDesignPage');
Route::get('/ycobusinesssolutions', 'adminController@ycoBizPage');

Route::get('/contact/us', 'adminController@contactUs');

//Admin
Route::get('/admin/upload', 'adminController@uploadOptimumPage');

Route::post('/admin/upload/optimum/residential', 'adminController@uploadOptimumRes');
Route::post('/admin/upload/optimum/offices', 'adminController@uploadOptimumOfices');
Route::post('/admin/upload/optimum/retail', 'adminController@uploadOptimumRetail');

Route::post('/admin/add/optimum/residential', 'adminController@addNewOptResGroup');
Route::get('/admin/delete/optimum/{id}', 'adminController@deleteOptimum');

Route::get('/get/groups', 'adminController@getSubGroups');
Route::get('/get/images', 'adminController@getInsideSub');

Route::get('/admin/upload/yco/design', 'adminController@uploadYCODesignPage');
Route::post('/admin/add/ycodesign/residential', 'adminController@addNewYDResGroup');

Route::post('/admin/upload/ycodesign/residential', 'adminController@uploadYDRes');
Route::post('/admin/upload/ycodesign/offices', 'adminController@uploadYDOfices');
Route::post('/admin/upload/ycodesign/retail', 'adminController@uploadYDRetail');
Route::get('/admin/delete/ycodesign/{id}', 'adminController@deleteYD');

Route::post('/admin/add/info', 'adminController@addInfo');
Route::get('/admin/view/info', 'adminController@viewInfo');