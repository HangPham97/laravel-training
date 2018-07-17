<?php

Route::group(['middleware' => 'web', 'prefix' => 'testmodule', 'namespace' => 'Modules\TestModule\Http\Controllers'], function()
{
    Route::get('table','DatatableController@apiTable')->name('table');
    Route::get('/', 'TestModuleController@index')->name('news.home');;
    Route::get('edit/{id}','TestModuleController@edit')->name('edit');
    Route::post('update/{id}', 'TestModuleController@update')->name('news.update');
    Route::get('create','TestModuleController@create')->name('news.create');
    Route::post('store','TestModuleController@store')->name('news.store');
    Route::get('category','TestModuleController@showCategory')->name('cate.home');
    Route::get('create/category','TestModuleController@createCate')->name('cate.create');
    Route::post('store/category','TestModuleController@storeCategory')->name('cate.store');
    Route::get('delete/{id}','TestModuleController@deleteNews')->name('delete');
    Route::get('delete/category/{id}','TestModuleController@deleteCate')->name('cate.delete');
    Route::get('edit/Category/{id}','TestModuleController@editCate')->name('cate.edit');
    Route::post('update/Category/{id}','TestModuleController@updateCate')->name('cate.update');
    Route::get('test','DatatableController@test');
});