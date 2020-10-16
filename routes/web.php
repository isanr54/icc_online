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

// User 
Route::get('/', function (){
	return view('index');
});

Route::get('login', function (){
	return view('login');
});

Route::get('daftar', function (){
	return view('daftar');
});

Route::get('desc_order', function (){
	return view('desc_order');
});

Route::get('order', function (){
	return view('order');
});
// Admin
Route::get('admins', 'AdminController@index');

Route::get('admin', function (){
	return view('admin/index');
});
Route::get('datauser', function (){
	return view('admin/datauser');
});
Route::get('transaksiuser', function (){
	return view('admin/transaksiuser');
});
Route::get('transaksiadmin', function (){
	return view('admin/transaksiadmin');
});
Route::get('pulsa', function (){
	return view('admin/pulsa');
});
Route::get('paketdata', function (){
	return view('admin/paketdata');
});
Route::get('vochergame', function (){
	return view('admin/vochergame');
});
Route::get('pln', function (){
	return view('admin/pln');
});
Route::get('pdam', function (){
	return view('admin/pdam');
});
Route::get('bpjs', function (){
	return view('admin/bpjs');
});
Route::get('tambahdata', function (){
	return view('admin/tambahdata');
});

