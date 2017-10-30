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

Route::get('/',
	'ProfileController@index');

/*route untuk ProfileController.php dengan fungsi index*/
	
Route::get('/nama-sendiri',
	'ProfileController@namaSendiri');
	
/*Route untuk ProfileController.php dengan fungsi namaSendiri*/
	
Route::get('/barang',
	'ProfileController@dataBarang');
	
/*Route untuk ProfileController.php dengan fungsi dataBarang*/