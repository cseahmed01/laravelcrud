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
Route::get('/allinfo', 'info@getifo');
Route::get('/delete/{id}','info@deleteinfo');
Route::POST('/userinsert','info@userinsert');
Route::get('/edit/{id}','info@edit');
Route::POST('/updateuser','info@updateuser');
Route::get('/test','info@test');
Route::get('/sessionretrive','info@sessionretrive');
Route::get('/sessiondestory','info@sessiondestory');
 