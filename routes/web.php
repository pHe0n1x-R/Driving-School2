<?php

use Illuminate\Support\Facades\Route;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('course');
// });

// Route::resource('abc','abc');

Route::resource('student','StudentController');

Route::get('/getindexpagetable/','StudentController@indexpagetable')->name('ajax.indexpagetable');
Route::resource('ajax','StudentController');
