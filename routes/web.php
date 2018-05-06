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

Route::get('/home/caribuku', 'UserController@index' )->name('caribuku');
Route::get('/home/admin',  'UserController@index')->name('homeadmin');
Route::get('/home', 'indexController@home')->name('home');

Route::post('/tambahpengunjung', 'pengunjungController@tambahpengunjung');

Route::get('/', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('index');
// })->name('index');

Route::get('/home/admin/login', function () {
    return view('loginadmin');
})->name('loginadmin');

Route::get('/coba', function () {
    return view('admin/index');
});

Route::get('/home/databuku', function () {
    return view('admin/databuku');
})->name('databuku');

Route::get('/home/datasiswa', function () {
    return view('admin/datasiswa');
})->name('datasiswa');



// Route::group(['prefix' => 'datasiswa'], function(){
 
//     Route::get('/', 'DataSiswaController@index');
//     Route::get('/create', 'DataSiswaController@create');
//     Route::post('/store', 'DataSiswaController@store');
//     Route::get('/show/{id}', 'DataSiswaController@show');
//     Route::post('/update/{id}', 'DataSiswaController@update');
//     Route::post('/destroy/{id}', 'DataSiswaController@destroy');
 
// });