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

Route::get('tambahsiswa', function () {
	if(Auth::user()){
		if(Auth::user()->hak_akses=="admin"){
	    	return view('home');
		}else {
	    	return view('user');
		}
	}else {
		return view('login');
	}
});

Route::get('register', function () {
	if(Auth::user()){
		if(Auth::user()->hak_akses=="admin"){
	    	return view('register');
		}else {
	    	return view('user');
		}
	}else {
		return view('login');
	}
});

Route::get('login', function () {
    if(Auth::user()){
		if(Auth::user()->hak_akses=="admin"){
	    	return view('home');
		}else {
	    	return view('user');
		}
	}else {
		return view('login');
	}
});

Route::get('user', function () {
    if(Auth::user()){
		if(Auth::user()->hak_akses=="admin"){
	    	return view('home');
		}else {
	    	return view('user');
		}
	}else {
		return view('login');
	}
});

Route::get('logout', 'CrudController@logout');

Route::post('login', 'CrudController@login');

Route::post('tambahlogin', 'CrudController@tambahlogin');

/* routing post untuk tambah data */
Route::post('prosestambah', 'CrudController@tambahdata');
Route::post('prosesedit', 'CrudController@proseseditdata');

/* routing untuk lihat data */
Route::get('/', 'CrudController@lihatdata');
Route::get('read', 'CrudController@lihatdata');
/* routing untuk menghapus data */
Route::get('hapus/{id}', 'CrudController@hapusdata');/* routing untuk mengubah data */
Route::get('formedit/{id}', 'CrudController@editdata');