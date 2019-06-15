<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'Web'
], function() {

    Route::get('/','HomeController@index',['middleware'=>'auth'])->name('home');

    Route::get('/user', 'UserProfileController@index');

    Route::get('/settings', 'SettingsController@index');

    Route::get('/login', 'SessionsController@create');

    Route::post('/login', 'SessionsController@store');

    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/register', 'RegistrationController@create');

    Route::post('/register', 'RegistrationController@store');

});


