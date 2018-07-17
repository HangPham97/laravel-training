<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminmodule', 'namespace' => 'Modules\AdminModule\Http\Controllers'], function()
{

    Route::get('/', 'DatatableController@index')->name('home');
    Route::get('table','DatatableController@apiTable')->name('table');
});