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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','StudentController@index')->name('home');
Route::get('/addstudent','StudentController@create')->name('addstudent');
Route::get('/editstudent/{id}','StudentController@edit')->name('editstudent');

Route::post('/savestudent','StudentController@store')->name('savestudent');
Route::post('/updatestudent/{id}','StudentController@updatestudentdata')->name('updatestudent');

Route::get('/marks','MarksController@index')->name('marks');
Route::get('/addmarks','MarksController@create')->name('addmarks');
Route::get('/editmarks/{id}','MarksController@edit')->name('editmarks');
Route::post('/savemarks','MarksController@store')->name('savemarks');
Route::post('/updatesmarks/{id}','MarksController@updatemarksdata')->name('updatesmarks');


Route::post('deletemarksAjax', 'MarksController@deletemarksAjax')->name('deletemarksAjax');
Route::post('deletestudent','StudentController@deletestudent')->name('deletestudent');
