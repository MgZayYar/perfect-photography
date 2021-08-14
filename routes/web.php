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
Route::get('/','frontend\FrontendController@index')->name('index');
Route::get('contact','frontend\FrontendController@contact')->name('contact');
Route::get('booking','frontend\FrontendController@booking')->name('booking');
Route::get('type/{id}','frontend\FrontendController@type')->name('type');
Route::get('package','frontend\FrontendController@package')->name('package');
Route::get('about','frontend\FrontendController@about')->name('about');
Route::get('weddingdress','frontend\FrontendController@weddingdress')->name('weddingdress');
Route::get('collection/{id}','frontend\FrontendController@collection')->name('collection');


Route::get('dashboard','backend\BackendController@index')->name('dashboard');

Route::resource('photographies','backend\PhotographyController');
Route::resource('subphotographies','backend\SubphotographyController');
Route::resource('types','backend\TypeController');
Route::resource('packages','backend\PackageController');
Route::resource('weddingdresses','backend\WeddingdressController');
Route::resource('collections','backend\CollectionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
