<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChangePassword;            
use App\Http\Controllers\UserController;
use App\http\Controllers\RegisterDeviceController;


            

Route::group(['middleware' => 'auth'], function () {


	Route::get('/home', 		[HomeController::class, 'index'])->name('home');
	Route::post('logout', 		[LoginController::class, 'logout'])->name('logout');
	Route::get('/alterasenha', [UserController::class, 'alterasenha'])->name('alterasenha');
	Route::post('salvarsenha', [UserController::class, 'SalvarSenha']);
	Route::get('resetSenha/{id}', [UserController::class, 'resetSenha']);
	Route::get('/registerdevice', 		[RegisterDeviceController::class, 'index'])->name('registerdevice');
	Route::get('/registerdevice/create', 		[RegisterDeviceController::class, 'create']);
	Route::post('/registerdevice/store', 		[RegisterDeviceController::class, 'store']);

	Route::resources([
		'user'		  => UserController::class,
	]);

	Route::post('postalterasenha', 	[UserController::class, 'postalterasenha'])->name('postalterasenha');
});

	Route::get('/', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');



