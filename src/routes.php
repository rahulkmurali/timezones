<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the TimezonesServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('timezones/{timezone}', 'laraveldaily\timezones\TimezonesController@index');