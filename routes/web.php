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



/* User Routes */
Route::get('/','user_control@index');

Route::get('/logoutuser','user_control@logout');

Route::get('/login','user_control@loginpage');
Route::post('/login','user_control@login');

Route::get('/register','register_control@index');
Route::post('/register','register_control@insert');

Route::get('/productdetail/{id}','user_control@productdetail');
Route::get('/compare/{id}','user_control@compare');
Route::get('/show','user_control@show');
Route::match(array('GET','POST'),'/productdetailinsert/{userid}/{productid}','user_control@productdetailinsert');
Route::get('/productdetaildelete/{id}','user_control@productdetaildelete');

Route::get('/cart/{id}','user_control@cart')->middleware('stopuser');

Route::get('/transaction','user_control@transaction')->middleware('stopuser');
Route::get('/transactioninsert','user_control@transactioninsert')->middleware('stopuser');
Route::get('/transactiondetail/{date}/{time}','user_control@transactiondetail')->middleware('stopuser');



/* Admin Routes */

Route::get('/Admin/admin_home','admin_control@index')->middleware('stopadmin');

Route::get('/logoutadmin','admin_control@logout')->middleware('stopadmin');

Route::get('/admin_add_car','admin_control@car')->middleware('stopadmin');
Route::post('/admin_add_car','admin_control@addcar')->middleware('stopadmin');

Route::get('/admin_view_car','admin_control@viewcar')->middleware('stopadmin');
Route::get('/deletecar/{id}','admin_control@deletecar')->middleware('stopadmin');

Route::get('/admin_add_bran','admin_control@bran')->middleware('stopadmin');
Route::post('/admin_add_bran','admin_control@addbran')->middleware('stopadmin');

Route::get('/admin_view_bran','admin_control@viewbran')->middleware('stopadmin');

Route::get('/admin_add_show','admin_control@show')->middleware('stopadmin');
Route::post('/admin_add_show','admin_control@addshow')->middleware('stopadmin');

Route::get('/admin_view_show','admin_control@viewshow')->middleware('stopadmin');
Route::get('/deleteshow/{id}','admin_control@deleteshow')->middleware('stopadmin');


