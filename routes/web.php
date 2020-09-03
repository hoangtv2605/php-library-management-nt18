<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Books
Route::get('books', 'BookController@index')->name('book.index');
Route::get('books/{book}', 'BookController@detail')->name('book_detail');

//Authors
Route::get('authors', 'AuthorController@index')->name('author.index');
Route::get('authors/{author}', 'AuthorController@detail')->name('author_detail');

//Borrowed book
Route::resource('requests', 'RequestController');
Route::get('request/{user}', 'RequestController@indexUser')->name('user.index');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('home', 'AdminController@index')->name('admin.home');
    Route::resource('publishers', 'PublisherController');
    Route::resource('authors', 'AuthorController');
    Route::resource('categories', 'CategoryController');
    Route::resource('books', 'BookController');
    Route::get('requests', 'RequestController@index')->name('admin.request');
    Route::get('check/{id}', 'RequestController@check')->name('admin.check');
    Route::get('approve/{id}', 'RequestController@approve')->name('admin.approve');
    Route::get('reject/{id}', 'RequestController@reject')->name('admin.reject');
});
