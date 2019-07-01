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

Auth::routes(['verify'=> true]);

Route::group(['middleware' => ['admin']], function () {
    Route::resource('admin/users' , 'Admin\AdminUserController');
    Route::resource('admin/posts' , 'Admin\AdminPostController');
    Route::resource('admin/categories' , 'Admin\AdminCategoryController');
    Route::resource('admin/photos' , 'Admin\AdminPhotoController');
    Route::get('admin/dashboard' , 'Admin\AdminDashboardController@index')->name('admin.dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
