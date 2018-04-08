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


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	// Route::get('/', function () {
 //    return view('welcome');
	// });

	Route::get('/', 'HomeController@index')->name('home');
	

	Route::get('/user', 'Admin\UserController@index')->name('user');
	Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('user.edit');
	Route::post('/user/edit/{id}', 'Admin\UserController@update')->name('user.update');

	Route::get('/disease', 'DiseaseController@index')->name('disease');
	Route::get('/disease/edit/{id}', 'DiseaseController@edit')->name('disease.edit');
	Route::get('/disease/detail/{id}', 'DiseaseController@detail')->name('disease.detail');
	Route::post('/disease/edit/{id}', 'DiseaseController@update')->name('disease.update');
	Route::get('disease/ajax/detail/{id}', 'DiseaseController@ajaxGetDetail')->name('disease.ajax.getDetail');

	Route::get('/gene', 'DiseaseController@index')->name('gene');
	Route::get('/gene/edit/{id}', 'DiseaseController@edit')->name('gene.edit');
	Route::post('/gene/edit/{id}', 'DiseaseController@update')->name('gene.update');	
});
