<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdController;
use App\Http\Controllers\AdminController;

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

Route::get('/', 'IdController@index');
Route::post('/insert', 'IdController@insertId')->name('insert');

Route::get('/admin-login', 'AdminController@index');
Route::post('/admin-checklogin', 'AdminController@checklogin')->name('admin-checklogin');
Route::group(['middleware' => 'id'], function () {


Route::get('/delete-idcard{id}', 'IdController@DeleteCard')->name('delete-idcard');
Route::get('/edit-idcard{id}', 'IdController@EditCard')->name('edit-idcard');
Route::post('/update-card', 'IdController@UpdateCard')->name('update-card');


Route::get('/dashboard', 'AdminController@successlogin')->name('admin-successlogin');
Route::get('/admin-logout', 'AdminController@logout')->name('admin-logout');
Route::get('/add-register', 'AdminController@AddRegister')->name('add-register');
Route::post('/insert-register', 'AdminController@InsertRegister')->name('insert-register');
Route::get('/all-register', 'AdminController@AllRegister')->name('all-register');
Route::get('/delete-register{id}', 'AdminController@DeleteRegister')->name('delete-register');
Route::get('/edit-register{id}', 'AdminController@EditRegister')->name('edit-register');
Route::post('/update-register', 'AdminController@UpdateRegister')->name('update-register');
Route::post('/approved', 'AdminController@Approve')->name('approval');
Route::get('/approved-id', 'AdminController@ApprovedId')->name('approved-id');
});

Route::get('/superAdmin', 'IdController@ViewApprovedId');



