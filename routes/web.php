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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/post/{id}', 'HomeController@postDetails');

Route::get('/donation-list', 'HomeController@donationList');
Route::get('/donated-list', 'HomeController@donatedList');

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/authenticate', 'Auth\LoginController@authenticate');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function ()
{
	Route::get('/', 'AdminController@index');
	Route::get('/dashboard', 'AdminController@index');

	Route::get('/donation', function () {
		return redirect('admin/donation/list');
	});
	Route::get('/donation/list', 'DonationController@index');
	Route::get('/donation/add', 'DonationController@create');
	Route::post('/donation/store', 'DonationController@store');
	Route::get('/donation/edit/{id}', 'DonationController@edit');
	Route::post('/donation/update', 'DonationController@update');
	Route::get('insert-donations', 'DonationController@insert');
	Route::post('insert-donations', 'DonationController@storeDonations');

	Route::get('/family', function () {
		return redirect('admin/family/list');
	});
	Route::get('/family/list', 'FamilyController@index');
	Route::get('/family/add', 'FamilyController@create');
	Route::post('/family/store', 'FamilyController@store');
	Route::get('/family/edit/{id}', 'FamilyController@edit');
	Route::post('/family/update', 'FamilyController@update');
	Route::get('insert-families', 'FamilyController@insert');
	Route::post('insert-families', 'FamilyController@storeFamilies');

	Route::get('/post', function () {
		return redirect('admin/post/list');
	});
	Route::get('/post/list', 'PostController@index');
	Route::get('/post/add', 'PostController@create');
	Route::post('/post/store', 'PostController@store');


	Route::get('/member', function () {
		return redirect('admin/member/list');
	});
	Route::get('/member/list', 'MemberController@index');
	Route::get('/member/add', 'MemberController@create');
	Route::post('/member/store', 'MemberController@store');

	Route::post('file/upload', 'FileController@uploadEventAttachments');
	Route::post('file/remove', 'FileController@deleteEventAttachment');
});