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



/*

Route::get('/', function () {

    $tasks = {
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    }

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'bar'
    ]);

});




 *************  OR  ****************



Route::get('/', function () {

    $tasks = {
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    }

    return view('welcome')->with(
        'foo' => 'bar',
        'tasks' => {
            'Go to the store',
            'Go to the market',
            'Go to work',
            'Go to the concert'
        }
    );

});






/*
    GET /projects (index)

    GET /projects/create (create)

    GET /projects/1 (show)

    POST /projects (store)

    GET /projects/1/edit (edit)

    PATCH /projects/1 (update)

    DELETE /projects/1 (destory)
*/

/*
Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destory');
*/

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
