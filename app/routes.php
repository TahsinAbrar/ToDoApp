<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('welcome/sayhello', 'WelcomeController@sayhello');

Route::get('greeting/sayhi', 'GreetingController@sayhi');

Route::resource('projects', 'ProjectsController');


//Route::resource('tasks', 'TasksController');
Route::resource('projeccts.tasks', 'TasksController');

Route::bind('tasks', function($value, $route) {
    return Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return Project::whereSlug($value)->first();
});