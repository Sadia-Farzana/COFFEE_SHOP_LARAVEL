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

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function(){
	return view('test');
});
Route::get('/register', 'customerRegistrationController@registration')->name('customerRegistration.registration');
Route::post('/register', 'customerRegistrationController@postRegistration')->name('customerRegistration.registration');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['as'=>'logout.index', 'uses'=>'logoutController@index']);
Route::get('/Searchfood', 'SearchController@index');
Route::get('/Searchfood/action', 'SearchController@action')->name('Sfood.action');



/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/

Route::middleware(['sess'])->group(function(){

	Route::get('/xyz', 'HomeController@index')->name('home.index');

		Route::get('/admin/create', 'HomeController@create')->name('home.create');
		Route::post('/admin/create', 'HomeController@store');
		Route::get('/customer/edit/{id}', 'HomeController@edit')->name('home.edit');
		Route::post('/customer/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');
		Route::get('/home/profile/{id}', 'HomeController@profile')->name('home.profile');
		Route::get('/menu/food', 'HomeController@menu')->name('home.food');
    Route::get('/search', 'HomeController@search')->name('home.food');

		//cart
		Route::get('/cart', 'CartController@index')->name('cart.index');
		Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
		Route::get('/cart/{food}', 'CartController@add')->name('cart.add');
		Route::get('/cart/destroy/{id}', 'CartController@destroy')->name('cart.destroy');
		Route::get('/cart/update/{id}', 'CartController@update')->name('cart.update');

		Route::resource('orders', 'OrderController');




});
