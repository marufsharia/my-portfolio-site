<?php
	
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
	
	
	use Illuminate\Routing\Router;
	use Illuminate\Support\Facades\Auth;
	
	/*Home page route*/
	Route::get('/', function () {
		return view('home');
	});
	
	/* My Site*/
	Route::get('/user/{user_name}', 'HomeController@mySite')->name('my_site');
	
	
	
	/* Email verified */
	Auth::routes(['verify' => true]);
	
	/* backend route*/
	Route::middleware(['auth'])->group(function () {
		Route::get('/dashboard', 'HomeController@index')->name('dashboard');
	
		/************************************************************
		 *  Services Route
		 *************************************************************/
		Route::resource('services', 'ServiceController');
	
		
	});
