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

// Route::get('/namaWeb', function () {
//     return view('namaFile');
// });

Route::view('/namaWeb', 'namaFile');

Route::get('/HelloWorld', function () {
    return "Ini adalah kalimat dan kata";
    // return '1' + '2';
});

Route::redirect('/namaWeb', '/HelloWorld');

Route::get('/param/{a}', function ($a) {
    // return "Kamu mengetikkan " . $a;
    return "Kamu mengetikkan $a";
});

Route::get('/param2/{a}/{b}', function ($a, $b) {
    return $a + $b;
    // return '1' + '2';
});

Route::get('/param3/{a?}', function ($a = 'aku adalah a') {
    return $a;
    // return '1' + '2';
});

// Route::get('/testing', 'TestingController@testing');
Route::get('/testing', 'App\Http\Controllers\TestingController@testing');
// Route::get('/testing/1', 'App\Http\Controllers\TestingController@testing2');

// Route::post('/', function () {
//     return view('welcome');
// });
