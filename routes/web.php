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
    return view('master');
});

Route::get('indexp','productCntroller@index')->name('admin.products.index');

Route::get('showp','productCntroller@show' )->name('admin.products.show');

Route::get('createp','productCntroller@create')->name('admin.products.create');
Route::post('storep','productCntroller@store')->name('admin.products.store');

Route::get('product/{product}/editp','productCntroller@edit')->name('admin.products.edit');
Route::post('product/{product}/updatep','productCntroller@update')->name('admin.products.update');

Route::get('product/{product}/delete','productCntroller@delete')->name('admin.products.delete');



Route::get('index','categoryCntroller@index')->name('admin.category.index');

Route::get('show','categoryCntroller@show' )->name('admin.category.show');

Route::get('create','categoryCntroller@create')->name('admin.category.create');
Route::post('store','categoryCntroller@store')->name('admin.category.store');

Route::get('category/{category}/edit','categoryCntroller@edit')->name('admin.category.edit');
Route::post('category/{category}/update','categoryCntroller@update')->name('admin.category.update');

Route::get('category/{category}/delete','categoryCntroller@delete')->name('admin.category.delete');


Route::get('userp' ,'userController@index')->name('product.index');


Route::any('store/{product}' ,'cartCntroller@store')->name('cart.store');