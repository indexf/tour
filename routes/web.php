<?php

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/', 'LandingController@index')->name('index');
Route::get('about', 'AboutController@index')->name('about');
Route::get('tour', 'TourController@index')->name('tour');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/login', function () {
    return view('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::post('lead/create', 'LeadController@create');

Route::post('lead/create2', 'LeadController@create2')->name('create2');

Route::get('category', 'CategoryController@index')->name('category');

// Галлерея:

Route::get('home/photo', 'PhotoController@index')->name('photo');

Route::get('home/photo/create', 'PhotoController@create')->name('photo.create');

Route::post('home/photo/upload', 'PhotoController@upload')->name('photo.upload');

Route::delete('home/photo/{id}/destroy', 'PhotoController@destroy')->name('photo.destroy');

Route::get('home/photo/edit', 'PhotoController@edit')->name('photo.edit');

Route::post('home/photo/{id}/update', 'PhotoController@update')->name('photo.update');

// Гиды:

Route::get('home/guide', 'GuideController@index')->name('guide');

Route::get('home/guide/create', 'GuideController@create')->name('guide.create');

Route::post('home/guide/upload', 'GuideController@upload')->name('guide.upload');

Route::delete('home/guide/{id}/destroy', 'GuideController@destroy')->name('guide.destroy');

Route::get('home/guide/edit', 'GuideController@edit')->name('guide.edit');

Route::post('home/guide/{id}/update', 'GuideController@update')->name('guide.update');

// Отзывы:

Route::get('home/review', 'ReviewController@index')->name('review');

Route::get('home/review/create', 'ReviewController@create')->name('review.create');

Route::post('home/review/upload', 'ReviewController@upload')->name('review.upload');

Route::delete('home/review/{id}/destroy', 'ReviewController@destroy')->name('review.destroy');

Route::get('home/review/edit', 'ReviewController@edit')->name('review.edit');

Route::post('home/review/{id}/update', 'ReviewController@update')->name('review.update');

// instagram:

Route::get('home/instagram', 'InstagramController@index')->name('instagram');

Route::get('home/instagram/create', 'InstagramController@create')->name('instagram.create');

Route::post('home/instagram/upload', 'InstagramController@upload')->name('instagram.upload');

Route::delete('home/instagram/{id}/destroy', 'InstagramController@destroy')->name('instagram.destroy');

Route::get('home/instagram/edit', 'InstagramController@edit')->name('instagram.edit');

Route::post('home/instagram/{id}/update', 'InstagramController@update')->name('instagram.update');

//Основные настройки


Route::get('home/main', 'MainController@index')->name('main');

Route::get('home/main/edit', 'MainController@edit')->name('main.edit');

Route::post('home/main/{id}/update', 'MainController@update')->name('main.update');



// Туры

Route::get('home/atour', 'ATourConrtoller@index')->name('atour');

Route::get('home/atour/create', 'ATourConrtoller@create')->name('atour.create');

Route::delete('home/atour/{id}/destroy', 'ATourConrtoller@destroy')->name('atour.destroy');

Route::post('home/atour/upload', 'ATourConrtoller@upload')->name('atour.upload');

Route::get('home/atour/edit', 'ATourConrtoller@edit')->name('atour.edit');

Route::post('home/atour/{id}/update', 'ATourConrtoller@update')->name('atour.update');