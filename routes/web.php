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

Route::get('/home/admin', 'UserController@stats')->name('homeadmin');
Route::get('/home', 'indexController@home')->name('index');

Route::post('/tambahpengunjung', 'pengunjungController@tambahpengunjung');

// Route::get('/home', function () {
//     return view('index');
// })->name('index');

Route::get('/home/admin/login', function () {
    return view('loginadmin');
})->name('loginadmin');

Route::get('/home/databuku', function () {
    return view('admin/databuku');
})->name('databuku');

Route::get('/home/datasiswa', function () {
    return view('admin/datasiswa');
})->name('datasiswa');

Route::get('/home/caribuku', function(){
    return view('caribuku');
})->name('caribuku');



// Route::group(['prefix' => 'datasiswa'], function(){
 
//     Route::get('/', 'DataSiswaController@index');
//     Route::get('/create', 'DataSiswaController@create');
//     Route::post('/store', 'DataSiswaController@store');
//     Route::get('/show/{id}', 'DataSiswaController@show');
//     Route::post('/update/{id}', 'DataSiswaController@update');
//     Route::post('/destroy/{id}', 'DataSiswaController@destroy');
 
// });