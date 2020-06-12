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
    return view('welcome');
});

Route::get('/', 'ClientController@index')->name('clients.index');
Route::get('/clients/search', 'ClientController@search')->name('clients.search');
Route::get('/clients/{client_id}', 'ClientController@show')->where('client_id', '[0-9]+')->name('clients.show');
Route::get('/pets/{pet_id}', 'PetController@show')->where('pet_id', '[0-9]+')->name('pets.show');


Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients/{client_id}/edit', 'ClientController@edit')->where('client_id', '[0-9]+')->name('clients.edit');
Route::put('/clients/{client_id}', 'ClientController@update')->where('client_id', '[0-9]+')->name('clients.update');


Route::get('/pets/create', 'PetController@create')->name('pets.create');
Route::post('/pets', 'PetController@store')->name('pets.store');
Route::get('/pets/{pet_id}/edit', 'PetController@edit')->where('pet_id', '[0-9]+')->name('pets.edit');
Route::put('/pets/{pet_id}', 'PetController@update')->where('pet_id', '[0-9]+')->name('pets.update');

Route::get('/visits/{visit_id}', 'VisitController@show')->where('visit_id', '[0-9]+')->name('visits.show');
Route::get('/visits/create', 'VisitController@create')->name('visits.create');
Route::post('/visits', 'VisitController@store')->name('visits.store');
Route::get('/visits/{visit_id}/edit', 'VisitController@edit')->where('visit_id', '[0-9]+')->name('visits.edit');
Route::put('/visits/{visit_id}', 'VisitController@update')->where('visit_id', '[0-9]+')->name('visits.update');