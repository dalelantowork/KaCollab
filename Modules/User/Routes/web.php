<?php
use Modules\User\Http\Controllers\UserController;
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

	// module-generator
	Route::resource('users', 'UserController');
	Route::get('users/{user}/edit-password', [UserController::class, 'editPassword'])->name('users.edit-password');
	Route::post('users/{user}/update-password', [UserController::class, 'updatePassword'])->name('users.update-password');

	Route::resource('citizen-profile', 'CitizenController')->middleware(['auth']);
	Route::resource('family', 'FamilyController')->middleware(['auth']);