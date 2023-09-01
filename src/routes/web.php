<?php

Route::group(['namespace'=>'Nazmulcurd\Simplecurd\Http\Controllers'],function(){
    Route::get('/category','CategoryController@index')->name('category');
    Route::get('/category-add','CategoryController@create')->name('category-add');
    Route::post('/category-store','CategoryController@store')->name('category-store');
    Route::get('/edit/{id}','CategoryController@edit')->name('edit');
    Route::post('/update/{id}','CategoryController@update')->name('update');
    Route::post('/delete','CategoryController@delete')->name('delete');
});