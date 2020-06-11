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


Route::get('/actors', function()
{
  
    return view('actors');
});
Route::get('/', function()
{
  
    return view('welcome');
});
Route::get('helloworld/{review}', 'ReviewController@show');

Route::get('test', function() {
    return view('test');
});

Route::get('/event/{action}/{event_id?}', function($action,
$event_id = null) {
echo 'I want to ', $action , ' ';
if (!empty($event_id))
echo $event_id;
})->where('action', '[A-Za-z]+')
->where('event_id','[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
