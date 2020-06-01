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
    return view('libraryhome');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('admin');
Route::get('status/{id}', 'HomeController@status')->name('status')->middleware('admin');


Route::get('/logout', 'HomeController@logout');

//addbook


Route::get('/bookadd', 'AdminbookController@bookadd')->name('bookadd')->middleware('admin');
Route::POST('/storebook', 'AdminbookController@storebook')->name('storebook')->middleware('admin');
Route::get('/allbook', 'AdminbookController@allbook')->name('allbook')->middleware('admin');
Route::get('/booksearch', 'AdminbookController@booksearch')->name('booksearch')->middleware('admin');

Route::get('/issuebook', 'AdminbookissueContrtoller@issuebook')->name('issuebook')->middleware('admin');
Route::POST('/storeissuebook', 'AdminbookissueContrtoller@storeissuereturnbook')->name('storeissuebook')->middleware('admin');
Route::get('/currentlyissuebook', 'AdminbookissueContrtoller@currentlyissuebook')->name('currentlyissuebook')->middleware('admin');
Route::get('/applylist', 'AdminapplylistController@applylist')->name('/applylist')->middleware('admin');


//user

Route::get('/userhome', 'UserController@index')->name('userhome')->middleware('user');
Route::get('/userprofile', 'UserController@profile')->name('/userprofile')->middleware('user');
Route::get('/applyforbook', 'UserController@applyforbook')->name('/applyforbook')->middleware('user');
Route::POST('applybook', 'UserController@applybook')->name('applybook')->middleware('user');
Route::get('/booklist', 'UserController@booklist')->name('booklist')->middleware('user');
Route::get('/findbook', 'UserController@findbooks')->name('/findbook')->middleware('user');