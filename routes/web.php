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



Route::group(['middleware' => ['web']], function(){

    Route::name('home_index')->get('/',function(){
        return view('welcome2');
    });

    //Authentication routes
    Auth::routes();


    Route::name('blog_indexs')->get('/blog','BlogController@get_index');

    Route::name('blog_single')->get('/blog/{slug}','BlogController@get_single')->where('slug','[\w\d\-\_]+');

    //Pages routes
    Route::name('blog_about')->get('/about','PagesController@get_about');
    Route::name('blog_contact')->get('/contact','PagesController@get_contact');
    Route::name('blog_index')->get('/loginhome','PagesController@get_index');
    
    //Post routes
    Route::name('post_index')->get('/posts','PostController@index');
    Route::name('post_create')->get('/posts/create','PostController@create');
    Route::name('post_store')->post('/posts','PostController@store');
    Route::name('post_show')->get('/posts/{id}','PostController@show');
    Route::name('post_edit')->get('/posts/{id}/edit','PostController@edit');
    Route::name('post_update')->put('/posts/{id}','PostController@update');
    Route::name('post_delete')->delete('/posts/{id}','PostController@delete');
});


Route::get('/home', 'HomeController@index')->name('home');
