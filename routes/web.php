<?php
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ReportController;

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'portals'], function() {
  Route::get('/', 'PortalController@index');
  Route::match(['get', 'post'], '/create', 'PortalController@create')->name('portal_create');
  Route::get('/{id}', 'PortalController@show');
});

Route::group(['prefix' => 'reports'], function() {
  Route::get('/', 'ReportController@index');
  Route::match(['get', 'post'], '/create/{portal_id}', 'ReportController@create')->name('report_create');
  Route::get('/{id}', 'ReportController@show');
});

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
