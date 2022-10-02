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

Route::get('/', function () {

    // return "admin is here";
    // return "hi you";
    return view('welcome');
});

Route::get('/about', function () {

    return "this is about page";
});

Route::get('/contact', function () {

    return "this is contact page";
});

Route::get('/post/{id}/{name}', function($id, $name){

    return "this is post number ". $id ." " .$name;
});

Route::get('admin/post/example', array('as'=>'example.home' ,function(){


    $url = route('example.home');
    return "this url is ". $url;
}));

Route::get('/post/{id}', '\App\Http\Controllers\PostController@index');
Route::resource('hoome', '\App\Http\Controllers\PostController');

Route::get('/reachout', '\App\Http\Controllers\PostController@reachout');
Route::get('/blog/{id}/{name}/{password}', '\App\Http\Controllers\PostController@show_blog');
