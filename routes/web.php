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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', ['uses'=>'UserController@getIndex']);
Route::get('/users/create', ['uses'=>'UserController@store']);
Route::get('/users/datatable', ['as'=>'datatables.data','uses'=>'UserController@anyData']);

Route::get('/certifications/index', [
    'uses' => 'CertificationController@index',
    'as' => 'certification.index'
]);

Route::get('/certifications/create', [
    'uses' => 'CertificationController@create',
    'as' => 'certification.create'
]);