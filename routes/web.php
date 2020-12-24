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

Route::resource('student','StudentController');
Route::get('/datat/','StudentController@indexpagetable')->name('datatable.indexpagetable');
// Route::resource('datatable','StudentController');
Route::resource('picturestore','PictureStoreController');
Route::resource('theme','themeController');
// Route::resource('ajax','AjaxController');
Route::any('/remove/{id}', 'StudentController@remove')->name('ajax.remove');

