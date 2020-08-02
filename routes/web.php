<?php

use App\Models\Image;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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


Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/email', function () {
    return view('auth.passwords.email');
});

Auth::routes(['verify'=>true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/gallery', 'HomeController@show')->name('gallery');
Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/userroles','Admin\DashboardController@userroles');

    Route::get('/editrole/{id}','Admin\DashboardController@editrole');
    Route::put('roleupdate{id}', 'Admin\DashboardController@updaterole');
    Route::delete('/deleterole/{id}','Admin\DashboardController@deleterole');
    Route::get('/addimage','Admin\AddimageController@indexs');
    Route::post('/addimage', 'Admin\AddimageController@store');
    Route::get('/listimage','Admin\ListimageController@index')->name('admin.listimage');
    Route::get('/editimage/{imageId}', 'Admin\AddimageController@show');
    Route::patch('/admin/update/{id}', 'Admin\AddimageController@editimage')->name('admin.update');
    Route::delete('/service_delete/{id}','Admin\AddimageController@deleteimage');
    Route::get('/search','Admin\ListimageController@search');
     Route::get('/count','Admin\ListimageController@count');
});

