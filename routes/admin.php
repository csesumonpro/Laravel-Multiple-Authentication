<?php

Route::get('admin-login','Admin\LoginController@adminLogin')->name('admin.login.get');
Route::post('admin-login','Admin\LoginController@login')->name('admin.login');

Route::get('dashboard',function (){
    return "Admin dashbaord";
});