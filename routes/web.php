<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'Web'
], function () {

    Route::get('/', 'HomeController@index', ['middleware' => 'auth'])->name('home');

    Route::get('/user', 'UserProfileController@index');

    Route::get('/settings', 'SettingsController@index');
    /**
     *Auth routes
     */
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@store');

    Route::get('/logout', 'Auth\LoginController@destroy');

    Route::get('/register', 'Auth\RegistrationController@showRegistrationForm');
    Route::post('/register', 'Auth\RegistrationController@store');

    Route::get('/reset', 'Auth\ResetPasswordController@showLinkRequestForm');
//    Route::post('/reset', 'Auth\ResetPasswordController@postEmail')->name('password.reset');
    Route::post('/reset', 'Auth\ResetPasswordController@sendResetLinkEmail');

    Route::get('reset/{token}', 'Auth\ResetFormController@showResetForm');
    Route::post('password/reset', 'Auth\ResetFormController@reset');
    /**
     *Post routes
     */
    Route::get('/posts', 'PostsController@index');
    Route::get('/posts/create', 'PostsController@create');
    Route::post('/posts', 'PostsController@store');
    Route::get('/posts/{post}', 'PostsController@show');

    /**
     *Category routes
     */
    Route::get('/categories', 'CategoryController@index');
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/categories', 'CategoryController@store');
    Route::get('/category/{category}', 'CategoryController@show');


});

