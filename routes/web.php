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


Route::get('/testmodel', function () {
	$query = App\post::all();
    return $query;
});


Route::get('/testmodel2', function () {
	$query = App\post::find(2);
    return $query;
});


Route::get('/testmodel3', function () {
	$query = App\post::where('title','like','%cepast kaya%')->get();
    return $query;
});


Route::get('/testmodel4', function () {
	$query = App\post::find(1);
	$query->title = "cari keluarga sakinah";
	$query->save();
    return $query;
});

Route::get('/testsiswa', function () {
	$query = App\siswa::all();
    return $query;
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/tampilan', function () {
    return view ('layouts.master2');
});







