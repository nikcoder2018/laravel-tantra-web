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

Route::get('/', 'PagesController@index');
Route::get('/setting', 'PagesController@setting');
Route::get('/signup', 'PagesController@signup');
Route::get('/about', 'PagesController@about');
Route::get('/ranking', 'RankingController@index');
Route::get('/topup', 'PagesController@topup');
Route::get('/downloads', 'PagesController@downloads')->name('downloads');

Route::get('/profile', 'ProfileController@index');
Route::get('/setting', 'ProfileController@setting');
Route::get('/changepassword', 'ProfileController@changepassword');
Route::get('/unstuck', 'ProfileController@unstuck');

Route::match(['put', 'patch'], '/profile/update/{$id}', 'ProfileController@update')->name('update_profile');

Route::post('unstuckdone', 'ProfileController@unstuckdone');
Route::post('changepassdone', 'ProfileController@changepassdone');
Route::post('updateprofiledone', 'ProfileController@updateprofiledone');

Route::get('/shop', 'ShopController@index');

Route::get('/verifyemail', 'Auth\RegisterController@verifyemail')->name('verifyemail');
Route::get('/verify/{email}/{verifytoken}', 'Auth\RegisterController@sendemaildone')->name('sendemaildone');

//Authentication
Auth::routes();

//GameLogin
Route::get('/gamelogin.php', 'GameLoginController@index');
Route::get('/gamelogin/result', 'GameLoginController@result');

//Admin
Route::get('/admin-dashboard', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin-accounts', 'AdminController@accounts')
    ->middleware('is_admin')
    ->name('accounts');

Route::get('/admin-events', 'AdminController@events')
    ->middleware('is_admin')
    ->name('events');

Route::post('/admin-events-create', 'AdminController@eventscreate')
->middleware('is_admin')
->name('events.create');


Route::get('/admin-events/prizes/{id}', 'AdminController@eventsprizes')
->middleware('is_admin')
->name('events.prizes');
