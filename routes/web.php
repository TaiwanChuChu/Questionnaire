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

Route::get('/', 'IndexController@index');
Route::post('/', 'IndexController@login');

Route::get('/s1010', 'AccountController@index')->name('s1010');
Route::get('/s1020', 'GroupController@index')->name('s1020');
Route::get('/s1030', 'MenuController@index')->name('s1030');
Route::post('/s1030', 'MenuController@event')->name('s1030_event');
Route::get('/s1030_view/{status}/{id?}', 'MenuController@index')->name('s1030_view');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'IndexController@logout')->name('logout');
