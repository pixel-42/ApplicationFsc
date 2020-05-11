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
//
//Route::get('/', function () {
//    return view('home');
//});




Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/getUser', 'UserController@index');
Route::get('/addUser', 'UserController@add');
Route::post('/saveUser', 'UserController@save');


Route::post('/submit', 'OrganisationController@submits')->name('organisation-form');
Route::post('/', 'OrganisationController@upload')->name('organisation-form-file');

Route::get('/data', 'OrganisationController@allData')->name('organisation-data');

Route::get('/logoutt', 'UserController@logout');



