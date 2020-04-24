<?php


// basic routes in my own way
// 1. Route::get('/foldername', function () {
//         return view('folder');
//     });

// 2. Route::get('/posts/sample', 'PostsController@postsample');

// 3. Route::resource('foldername','NameController');


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

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.index');
});

// Route::get('/tasks', function () {
//     return view('admin.index');
// });

Route::get('/tasks', function () {
    return view('tasks.index');
});

Route::get('/patients', function () {
    return view('patients.index');
});
//sample folder functions

Route::get('/samplefolder', function () {
    return view('samplefolder');
});

// end of sample folder functions

Route::get('/diagnosis', function () {
    return view('diagnosis.index');
});

Route::get('/dischargepatients', function () {
    return view('dischargepatients.index');
});

Route::get('/prescriptions', function () {
    return view('prescriptions.index');
});

Route::get('/userupdates', function () {
    return view('edit');
});

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

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');


Route::post('/edit/user/', 'UserController@update')->name('user.update');

Route::get('/doctors/medicines', 'DoctorsController@medmethod');

Route::get('/tasks/index', 'SchedulesController@index');

Route::get('/prescriptions/index', 'PrescriptionsController@index');

Route::get('/diagnosis/index', 'DiagnosisController@index');

Route::get('/dischargepatients/index', 'DischargeController@index');

Route::get('/doctors/docdashboard', 'DoctorsController@docsmethod');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
    ]);

Route::resource('posts','PostsController');

Route::resource('prescriptions','PrescriptionsController');

Route::resource('dischargepatients','DischargeController');

Route::resource('doctors','DoctorsController');

Route::resource('admin','LoginController');

Route::resource('patients','PatientsController');

Route::resource('diagnosis','DiagnosisController');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', function(){

		return view('home');

    })->name('home');
    
    //end of the line pls add some more roles

	Route::get('/dashboard', function(){

		return view('dashboard');

	})->name('dashboard');

});
 

Route::resource('tasks', 'SchedulesController');

Route::get('events', 'EventController@index')->name('events.index');
Route::post('events', 'EventController@addEvent')->name('events.add');






