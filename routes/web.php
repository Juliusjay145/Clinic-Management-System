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

Route::get('/doctors', function () {
    return view('doctors.index');
});

Route::get('/patients', function () {
    return view('patients.index');
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

Route::get('/doctors/medicines', 'DoctorsController@medmethod');

Route::get('/doctors/docdashboard', 'DoctorsController@docsmethod');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');

Route::resource('doctors','DoctorsController');

Route::resource('patients','PatientsController');

// Route::post('/login/custom',[

// 	'uses'	=>	 'LoginController@login',
// 	'as'	=>	 'login.custom'

// ]);

// Route::group(['middleware' => 'auth'], function(){

// 	Route::get('/home', function(){

// 		return view('home');

// 	})->name('home');

// 	Route::get('/dashboard', function(){

// 		return view('dashboard');

// 	})->name('dashboard');

// });





