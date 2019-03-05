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
//HomeController
Route::get('/home', 'HomeController@index')->name('home');
Route::get('services/new','HomeController@newService');
Route::post('services/new','HomeController@storeService');
Route::get('service/delete/{id}','HomeController@deleteService');
Route::get('service/edit/{id}','HomeController@editService');
Route::post('service/edit/{id}','HomeController@updateService');
//FeedbackController
Route::get('feedback','FeedbackController@feedback');
Route::post('feedback','FeedbackController@storeFeedback');
Route::get('feedbacks','FeedbackController@viewFeedbacks');
//AdminController
Route::get('admin/users','AdminController@users');
Route::get('admin/user/edit/{id}','AdminController@editUser');
Route::post('admin/user/edit/{id}','AdminController@updateUser');
Route::get('admin/user/delete/{id}','AdminController@deleteUser');

//AdminController
Route::get('admin/services','AdminController@services');
Route::get('admin/service/edit/{id}','AdminController@editService');
Route::post('admin/service/edit/{id}','AdminController@updateService');
Route::get('admin/service/delete/{id}','AdminController@deleteService');
