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


Route::group(array('domain' => '{user_name}.localhost'), function () {
	Route::get('/', 'HomeController@mySite')->name('my_site_name');
});

Route::get('/', function () {
	return view('home');
});

/* My Site*/
Route::get('/user/{user_name}', function ($user_name) {
	//return $user_name;
	return redirect()->route('my_site_name', $user_name);
})->name('my_site');


/* Email verified */
Auth::routes(['verify' => true]);

/* backend route*/
Route::middleware(['auth'])->group(function () {
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	/************************************************************
	 *  Services Route
	 *************************************************************/
	Route::post('/services/make-active/{id}', 'ServiceController@makeActive')->name('services.make-active');
	Route::post('/services/make-inactive/{id}', 'ServiceController@makeInactive')->name('services.make-inactive');

	Route::resource('services', 'ServiceController');

	/************************************************************
	 *  Services Route
	 *************************************************************/
	//        Route::get('/image-sliders/', 'SliderController@index')->name('image-sliders.index');
	//        Route::get('/image-sliders/create', 'SliderController@create')->name('image-sliders.create');
	Route::post('/image-sliders/make-active/{id}', 'SliderController@makeActive')->name('image-sliders.make-active');
	Route::post('/image-sliders/make-inactive/{id}', 'SliderController@makeInactive')->name('image-sliders.make-inactive');
	Route::resource('image-sliders', 'SliderController');



	/************************************************************
	 *  Site Setting Route
	 *************************************************************/
	Route::get('/site-setting', 'SiteSettingController@siteEdit')->name('site-setting.edit');
	Route::post('/site-setting', 'SiteSettingController@siteUpdate')->name('site-setting.update');
});