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

Route::get('/viewpdffile', function(){
    return view('viewpdf.testpdf');
});

Route::get('/viewpdf',function(){
    $pdf=PDF::loadview('viewpdf.testpdf');
    return $pdf->stream('test.pdf');
});


Route::get('/pdf',function(){
    $html='<h1> hello pdf </h1>';
    $pdf = PDF::loadhtml($html);
    return $pdf->stream('test.pdf');

});

Route::get('/viewpdfwithdatafile', function(){
    $data=[
        ['name' => 'Audi', 
        'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo�Audi.png',
    ],
 
    ['name' => 'ford', 
        'logo' => 'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
    ]
 
];
$pdf = PDF::loadview('viewpdf.pdfwithdata' ,compact('data'));
 
return $pdf->download('test.pdf');
});


Route::get('/', function () {
    return view('welcome');
});



Route::get('/datat/','StudentController@indexpagetable')->name('datatable.indexpagetable');
// Route::resource('datatable','StudentController');
Route::resource('picturestore','PictureStoreController');
Route::resource('theme','themeController');
Route::resource('ajax','AjaxController');
Route::any('/remove/{id}', 'StudentController@remove')->name('ajax.remove');
// Route::resource('dbdirect','TestModel');
Route::resource('chart','ChartController');


Route::get('generate_pdf','StudentController@generate_pdf');

Route::get('/export/','StudentController@export');

Route::get('export/income/','ExportController@exportIncome')->name('export.income');

Route::get('/student/import2','StudentController@showimportpage')->name('student.importpage');
Route::post('/student/import/','StudentController@import')->name('students.import');
// Route::resource('student','StudentController');

