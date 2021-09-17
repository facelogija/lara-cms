<?php

use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use App\User;

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

Auth::routes(['verify' => true]);

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

//Route::get('/home/', 'HomeController@index');


Route::get('/', 'IndexController@showPosts')->name('main');
Route::get('about', 'IndexController@about')->name('about');


Route::prefix('lesson')->group(function() {
	Route::get('/{lesson}', 'LessonController@show')->name('lesson.show');
});

Route::prefix('post')->group(function() {
	Route::get('/{post}', 'PostsController@show')->name('post.show');
});

Route::post('/sentmail', 'IndexController@sentmail')->name('sentmail');

Route::prefix('admin')->middleware('is_admin')->middleware('verified')->middleware('twofactor')->group(function() {
Route::get('/', 'AdminController@show')->name('admin.show');
	Route::get('enabletwofactor', 'AdminController@enableTwoFactor')->name('admin.enabletwofactor');
	Route::prefix('/conmanager')->group(function(){
	Route::get('/', 'AdminController@adminconmanager')->name('admin.conmanager');

		Route::prefix('/lesson')->group(function(){
		Route::get('/create', 'LessonController@create')->name('lesson.create');
		Route::post('/upload', 'LessonController@upload')->name('lesson.upload');
		Route::post('/', 'LessonController@store')->name('lesson.store');
		Route::get('/{lesson}/edit', 'LessonController@edit')->name('lesson.edit');
		Route::patch('/{lesson}', 'LessonController@update')->name('lesson.update');
		Route::get('/search_id', 'LessonController@search_id')->name('lesson.search_id');
		Route::get('/search_list', 'LessonController@search_lists')->name('lesson.search_lists');
		Route::post('/search', 'LessonController@search')->name('lesson.search');
		Route::post('/review', 'LessonController@review')->name('lesson.review');
		Route::get('/{lesson}/review', 'LessonController@review_id')->name('lesson.review_id');
		Route::get('/{lesson}/suspend', 'LessonController@suspend')->name('lesson.suspend');
		Route::get('/{lesson}/delete/', 'LessonController@delete')->name('lesson.delete');

});

		Route::prefix('/post')->group(function(){
		Route::get('/create', 'PostsController@create')->name('post.create');
		Route::post('/upload', 'PostsController@upload')->name('post.upload');
		Route::post('/', 'PostsController@store')->name('post.store');
		Route::get('/{post}/edit', 'PostsController@edit')->name('post.edit');
		Route::patch('/{post}', 'PostsController@update')->name('post.update');
		Route::get('/search_id', 'PostsController@search_id')->name('post.search_id');
		Route::get('/search_list', 'PostsController@search_lists')->name('post.search_lists');
		Route::post('/search', 'PostsController@search')->name('post.search');
		Route::post('/review', 'PostsController@review')->name('post.review');
		Route::get('/{post}/review', 'PostsController@review_id')->name('post.review_id');
		Route::get('/{post}/suspend', 'PostsController@suspend')->name('post.suspend');
		Route::get('/{post}/delete/', 'PostsController@delete')->name('post.delete');

});
});

	Route::prefix('/profile')->group(function(){
		Route::get('/', 'AdminController@profile')->name('admin.profile');
		Route::post('/update', 'AdminController@update')->name('profile.edit');
		Route::post('/updateimage', 'AdminController@updateimage')->name('profile.updateimage');
		Route::post('/changepassword', 'AdminController@changePassword')->name('profile.changepassword');
});

Route::get('/settings', 'AdminController@settings')->name('admin.settings');

Route::prefix('/statistics')->group(function(){
	Route::get('/', 'AdminController@statistics')->name('admin.statistics');
	Route::get('/lastmonth', 'AdminController@statisticsLastMonth')->name('admin.statistics.lastMonth');
	Route::get('/lastyear', 'AdminController@lastYear')->name('admin.statistics.lastYear');

});
});


