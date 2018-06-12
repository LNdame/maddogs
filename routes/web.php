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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/register', 'RegistrationController@index');

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user'.$id. 'with a name of'.$name;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
Route::resource('companies', 'CompaniesController');
Route::resource('banks', 'BanksController');
//Route::get('/companies/{company}/upload', 'CompaniesController@upload');
//Route::get('/uploads/{company}/create', 'UploadsController@create');
//Route::get('/uploads/{company}/store', 'UploadsController@store');
//Route::get('/companies/{company}/tracking_save', 'CompaniesController@tracking_save');
Route::resource('uploads', 'UploadsController');
Route::resource('tracking', 'TrackingController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
