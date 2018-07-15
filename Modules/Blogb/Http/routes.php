<?php

Route::group(['middleware' => 'web', 'prefix' => 'blogb', 'namespace' => 'Modules\Blogb\Http\Controllers'], function()
{
    Route::get('/', 'BlogbController@index');
});
