<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'Web'
], function() {

    Route::get('/','HomeController@index',['middleware'=>'auth'])->name('home');

    Route::get('/user', 'UserProfileController@index');

    Route::get('/settings', 'SettingsController@index');

    Route::get('/login', 'LoginController@create');
    Route::post('/login', 'LoginController@store');

    Route::get('/logout', 'LoginController@destroy');

    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');

    Route::get('reset/{token}', 'ResetForm@showResetForm');
    Route::post('password/reset', 'ResetForm@reset');

    Route::get('/reset', 'ResetPasswordController@index');
    Route::post('/reset', 'ResetPasswordController@postEmail')->name('password.reset');


});


