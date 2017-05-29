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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::post('/posts/update','PostsController@update');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');
/*

Route::get('/tasks', function () {

	// Normal Code
	//$tasks = DB::table('tasks')->latest()->get();
	

	// Eloquent Code
    //$tasks = Task::all();

    //return view('tasks.index', compact('tasks'));

});

Route::get('/tasks/{task}', function ($id) {

	// Normal Code
	// $task = DB::table('tasks')->find($id);


	// Eloquent Code
	//$task = Task::find($id);

    //return view('tasks.show', compact('task'));
});

*/