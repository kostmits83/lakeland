<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\StripEmptyParams;

Route::group([
	'middleware' => 'web', 
	// 'prefix' => 'admin',
	'namespace'  => 'App\Http\Controllers\Admin\Auth',
], 
	function () {
		// Login
	    Route::get('admin/login', 'LoginController@showLoginForm')->name('backpack.auth.login');
		Route::post('admin/login', 'LoginController@login')->name('backpack.auth.login');

		// Password reset
		Route::get('admin/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
        Route::post('admin/password/reset', 'ResetPasswordController@reset');
        Route::get('admin/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
        Route::post('admin/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'App\Http\Controllers\PagesController@welcome')->name('welcome');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
