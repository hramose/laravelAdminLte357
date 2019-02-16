<?php

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
  return view('layouts.content');
}); */

Route::get('/dashboard', 'DashboardController@dashboardv1')->name('dashboardv1');
Route::get('/dashboard/v2', 'DashboardController@dashboardv2')->name('dashboardv2');
Route::get('/dashboard/v3', 'DashboardController@dashboardv3')->name('dashboardv3');

// Auth::routes();
// Authentication Routes...
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
