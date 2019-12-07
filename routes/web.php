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
Route::get('newhome', 'HomeController@newhome')->name('newhome');
Route::get('/newpost', 'UserController@index')->name('newPost');
Route::get('/main', 'HomeController@main')->name('main');

Route::get('/life', 'HomeController@life')->name('life');
Route::get('/singlePost/{id}', 'HomeController@singlePost')->name('singlePost');
Route::get('/allPost', 'HomeController@allPost')->name('allPost');
Route::get('/all/question', 'HomeController@allQuestion')->name('allQuestion');
Route::get('/new/post', 'HomeController@new_post')->name('new_post');
Route::get('/ask/question', 'HomeController@ask_question')->name('ask_question');
Route::post('/new/post/post', 'HomeController@new_post_post')->name('new_post_post');
Route::post('answer/', 'HomeController@answer_submit')->name('answer_submit');
Route::post('/new/question/post', 'HomeController@ask_question_post')->name('ask_question_post');


