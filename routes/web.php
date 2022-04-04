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

Route::get('/template', function () {
    return view('template.app');
});

Route::get('/', function () {
    return view('home2');
});

Route::get('/home', function () {
    return view('home2');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/register','AuthController@register');
Route::post('/postregister','AuthController@postregister');
Route::get('/logout','AuthController@logout');
    
Route::group(['middleware' => ['auth', 'checkRole:admin','prevent-back-history']],function(){
    Route::get('/datauser','ProfileController@datauser');
    Route::get('/cetak','ProfileController@cetakpdf');
});

Route::group(['middleware' => ['auth','prevent-back-history']],function(){

    Route::get('/dashboard','ProfileController@dashboard');
    
    Route::get('/kota','KotaController@index');

    Route::get('/profile/index/{id}','ProfileController@index');
    Route::get('/profile/{id}','ProfileController@edit');
    Route::put('/profile/update/{id}','ProfileController@update');

    Route::get('/perjalanan','PerjalananController@index');
    Route::get('/perjalanan/create','PerjalananController@create');
    Route::post('/perjalanan/store','PerjalananController@store');
    Route::get('/perjalanan/delete/{id}','PerjalananController@destroy');
});
 