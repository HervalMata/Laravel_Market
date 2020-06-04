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

Route::get('/', 'HomeController@index');
Route::get('/product/{slug}', 'HomeController@single')->name('product.single');
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::get('remove/{slug}', 'CartController@remove')->name('remove');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('cancel', 'CartController@cancel')->name('cancel');
});


Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');


Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
        Route::post('photos/remove', 'ProductPhotoConntroller@removePhoto')->name('photo.remove');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
