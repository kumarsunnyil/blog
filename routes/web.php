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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('posts/{something}', 'PostController@getPost');
Route::get('posts/', 'PostController@getPost');

// implementation of the route middleware

/*
Route::get('posts/{something}', ['middleware' => 'down.for.maintenance', function () {
    return "Only big boys/girls can see this.";
}]);
*/

/*
Route::get('posts/{something}', function () {
    //
})->middleware(['down.for.maintenance']);
*/

Route::resource('photos', 'PhotoController');

// routes for the image gallery
Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

// Contact us

Route::get('contact-us', 'ContactController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactController@contactUSPost']);