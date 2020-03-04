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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Category
Route::get('/category', 'categoryController@create');
Route::get('/category/add', 'categoryController@store');
Route::get('/category/view', 'categoryController@index');
Route::get('/category/show/{id}', 'categoryController@show');
Route::get('/category/edit/{id}', 'categoryController@edit');
Route::get('/category/update/{id}', 'categoryController@update');
Route::get('/category/destroy/{id}', 'categoryController@destroy');
Route::get('/category/delete/{id}', 'categoryController@delete');
// Route::get('/category/delete_all', 'categoryController@delete_all')->name('ajaxdata.massremove');

//Subcategory
Route::get('/sub_category', 'subCategoryController@create');
Route::get('/sub_category/add', 'subCategoryController@store');
Route::get('/sub_category/view', 'subCategoryController@index');
Route::get('/sub_category/show/{id}', 'subCategoryController@show');
Route::get('/sub_category/edit/{id}', 'subCategoryController@edit');
Route::get('/sub_category/update/{id}', 'subCategoryController@update');
Route::get('/sub_category/destroy/{id}', 'subCategoryController@destroy');
