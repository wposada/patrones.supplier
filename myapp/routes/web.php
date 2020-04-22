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
    return view('home2');
});

Route::get('quienes', array('as' => 'quienes', function()
    {
        return View::make('quienes');
    }));



/*Route::get('quotes', array('as' => 'quienes', function()
    {
        return View::make('quotes');
    }));*/
Route::get('quotes','QuoteController@index');
Route::get('quotes','QuoteController@index')->name('quotes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
