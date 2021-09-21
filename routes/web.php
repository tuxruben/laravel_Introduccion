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


Route::get('/', function(){
	$nombre = 'Jorge';

return view('home', compact('nombre'));
});
*/
App::setlocale('es');

Route::resource('portafolio','ProjectController')->parameters(['portafolio'=>'project'])->names('projects');
//Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
//Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/portafolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//Route::post('portafolio', 'ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contacto','contacto')->name('contact');
Route::view('/','home')->name('home');


Route::post('contacto','MessageController@store')->name('messages.store');
Auth::routes(['register'=>false]);


