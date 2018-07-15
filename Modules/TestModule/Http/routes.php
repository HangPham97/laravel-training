<?php

Route::group(['middleware' => 'web', 'prefix' => 'testmodule', 'namespace' => 'Modules\TestModule\Http\Controllers'], function()
{
    Route::get('/', 'TestModuleController@index');
    Route::get('edit/{id}',['as'=>'edit','uses'=>'TestModuleController@edit']);
    Route::post('/update/{id}', 'TestModuleController@update')->name('new.update');
});
