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

Route::get('posts', function () {
    return \App\Post::all();
});

Route::get('/', 'RoutesController@inicio')->name('inicio');

Route::get('/audio', 'RoutesController@audio')->name('audio');

Route::get('/banda', 'RoutesController@banda')->name('banda');

Route::get('/colegio', 'RoutesController@colegio')->name('colegio');

Route::get('/calche', 'RoutesController@calche')->name('calche');

Route::get('/cnp', 'RoutesController@cnp')->name('cnp');

Route::get('/contacto', 'RoutesController@contacto')->name('contacto');

Route::get('/team', 'RoutesController@team')->name('team');

Route::get('blog/{post}', 'PostsController@show')->name('posts.show');

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});

Route::group(['prefix'=>'admins',
              'namespace'=>'Admin',
              'middleware'=>'auth'],
    function (){
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('posts', 'PostsController@index')->name('admin.posts.index');
        Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
        Route::post('posts', 'PostsController@store')->name('admin.posts.store');
        Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
        Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');

        Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
        Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photo.destroy');
    });

//Route::group(['prefix'=>'modules'],
//    function (){
//    Route::get('/audio', 'RoutesController@audio')->name('audio');
//
//});




// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');