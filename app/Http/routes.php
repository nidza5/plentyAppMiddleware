<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){

    $tasks = App\Task::all();
    return view('welcome',compact('tasks'));
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('articles', 'ArticleController@index');
Route::get('article/{id}', 'ArticleController@show');
Route::post('article', 'ArticleController@store');
Route::put('articles', 'ArticleController@store');
Route::delete('articles', 'ArticleController@destroy');


