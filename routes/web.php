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


Route::get('/about', function()
{
    return view('about');
});
Route::get('/', function()
{
    return view('welcome');
});
Route::get('/admin', 'AdminController@index');
Route::get('/actors', 'ActorController@index');
Route::get('/performances', 'PerformanceController@index');
Route::get('/performances/create', 'PerformanceController@create');
Route::get('/tickets','PerformanceTimeController@index');
Route::get('/performancetimes/create','PerformanceTimeController@create');


Route::get('/event/{action}/{event_id?}', function($action,
$event_id = null) {
echo 'I want to ', $action , ' ';
if (!empty($event_id))
echo $event_id;
})->where('action', '[A-Za-z]+')
->where('event_id','[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
