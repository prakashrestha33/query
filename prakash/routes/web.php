<?php


Route:: get('/','HomeController@index');


Auth::routes();


Route::get('/home', 'HomeController@index');


Route::resource('query', 'QueryController');

Route::resource('reply', 'ReplyController');



//Admin Login
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');

//Admin Register
Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\RegisterController@register');

//Admin Passwords
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');


//Employee Login
Route::get('employee/login', 'EmployeeAuth\LoginController@showLoginForm');
Route::post('employee/login', 'EmployeeAuth\LoginController@login');
Route::post('employee/logout', 'EmployeeAuth\LoginController@logout');

//Employee Register
Route::get('employee/register', 'EmployeeAuth\RegisterController@showRegistrationForm');
Route::post('employee/register', 'EmployeeAuth\RegisterController@register');

//Employee Passwords
Route::post('employee/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('employee/password/reset', 'EmployeeAuth\ResetPasswordController@reset');
Route::get('employee/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('employee/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');


//Customer Login
Route::get('customer/login', 'CustomerAuth\LoginController@showLoginForm');
Route::post('customer/login', 'CustomerAuth\LoginController@login');
Route::post('customer/logout', 'CustomerAuth\LoginController@logout');

//Customer Register
Route::get('customer/register', 'CustomerAuth\RegisterController@showRegistrationForm');
Route::post('customer/register', 'CustomerAuth\RegisterController@register');

//Customer Passwords
Route::post('customer/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('customer/password/reset', 'CustomerAuth\ResetPasswordController@reset');
Route::get('customer/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('customer/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');

