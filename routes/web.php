<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support;

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

//Route::group([
//    'middleware' => 'auth'
//], function () {
//    Route::group(['middleware' => 'role'], function () {
//        Route::get('/list-inspection', 'Crm\InspectingController@allData')->name('list-inspection');
//    });
//
//});
        Route::group(['prefix' => 'admin'], function () {
            //Список заявок
            Route::get('/list-application', 'Crm\ApplicationController@showAllRequestForAdmin')
                ->name('list-application-admin');
            //Список инспекторов
            Route::get('/showInspecting', 'Crm\InspectingController@showInspecting')->name('showInspecting');
            //Удаление инспектора
            Route::get('/delete-inspecting/{inspecting_id}', 'Crm\Admin\ActionWithInspectingController@deleteInspecting')
                ->name('delete-inspecting');
            //Страница добавления инспектора
            Route::get('/show-form-add-inspecting', 'Crm\Admin\ActionWithInspectingController@formAddInspecting')
                ->name('show-form-add-inspecting');
            Route::post('/add-inspecting', 'Crm\Admin\ActionWithInspectingController@create')
                ->name('add-inspecting');
        });
        Route::get('', 'Crm\Page\IndexController@index')->name('home-page');




        Route::group(['prefix' => 'inspecting'], function () {
            //Список заявок
            Route::get('/list-application-inspecting', 'Crm\ApplicationController@showAllRequest')
                ->name('list-application-inspecting');

            //Страница заявки
            Route::get('/request/{request_id}', 'Crm\ApplicationController@showRequest')->name('show-request');

            //Изменение статуса
            Route::post('/request/change-status', 'Crm\StatusesController@submits')->name('change-status');

            //Добавление комменатрия
            Route::post('/request/{id}/add-comment', 'Crm\ApplicationController@addComment')->name('add-comment');

            //Изменение статуса
            Route::post('/request/change-status/{id}', 'Crm\StatusesController@changeStatusAdd')->name('change-status-add');
            Route::post('/request/change-status/ok/{id}', 'Crm\StatusesController@changeStatusOk')->name('change-status-ok');
            Route::post('/request/change-status/no/{id}', 'Crm\StatusesController@changeStatusNo')->name('change-status-no');


        });
