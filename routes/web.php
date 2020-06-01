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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');


Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('products', 'ProductController');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
