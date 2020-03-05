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

// pagtawag sa folder
Route::get('/posts', function () {
    return view('posts.index');
});

//sample folder functions

Route::get('/samplefolder', function () {
    return view('samplefolder');
});

// end of sample folder functions

Route::get('/docsappointment', function () {
    return view('medicines');
});

Route::get('/docsappointment', function () {
    return view('calendartasks');
});


Route::get('/posts/main', 'PostsController@postsample');

Route::get('/posts/nextpage', 'PostsController@nextpls');

// sample routes

Route::get('/samplefolder/sample', 'SampleController@postsamples');

// end of sample routes

Route::get('/docsappointment/medicines', 'SchedulesController@medicinesmethod');

Route::get('/docsappointment/calendartasks', 'SchedulesController@tasksmethod');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');





