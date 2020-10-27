<?php

use Illuminate\Support\Facades\Route;

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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->namespace('Front')->group(function () {
    Route::name('home')->get('/', 'KidController@index');
    Route::name('more')->get('/more', 'KidController@newsMore');
    Route::name('news_single')->get('/newssingle/{id}', 'KidController@newsSingle');
    Route::name('teacher')->get('/teacher', 'KidController@teacher');
    Route::name('contact')->get('/contact', 'KidController@contact');
    Route::name('message')->post('/message', 'KidController@message');
    Route::name('gallery')->get('/gallery', 'KidController@gallery');

    //Access error pages
    Route::name('register')->get('/register', 'KidController@register');
    Route::name('login')->get('/login', 'KidController@login');
    //login
    Route::name('bogcha_admin')->get('/bogcha_admin', 'KidController@loginAdmin');
});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->middleware('admin')->namespace('Back')->group(function () {
    //news information page
    Route::name('bogcha')->get('/bogcha', 'AdminController@index');
    Route::name('single_news')->get('/single_news/{id}', 'AdminController@singleNews');
    Route::resource('news', 'AdminController');
    Route::name('upload')->post('/news/create', 'AdminController@upload'); //!!!upload
    // Staff information page
    Route::name('tarbiyachi')->get('/tarbiyachi', 'TeacherController@teacher');
    Route::resource('teachers', 'TeacherController');
    Route::name('uploadtech')->post('/teachers/create', 'TeacherController@uploadTeach'); //!!!upload
    // Gallery information page
    Route::name('rasm')->get('/rasm', 'AdminController@gallery');
    Route::resource('galleries', 'GalleryController');
    Route::name('uploadgal')->post('/galleries/create', 'GalleryController@uploadGal'); //!!!upload
    //message page
    Route::name('xabar')->get('/xabar', 'AdminController@message');
    Route::name('remove')->post('/remove', 'AdminController@remove');
    Route::name('messagesingle')->get('/messagesingle/{id}', 'AdminController@messageSingle');

});
