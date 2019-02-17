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
/*Route::get('about',function (){
    $people = ['mohamad','sina','ali'];
//return view('about', ['people' => $people]);
//return view('about', compact('people')); // compact return array and 1st parameter get new key same variable without $
//return view('about')->with('people',$people); // set key(param1) and variable(param2) for passing to view (we said chaining)
//return view('about')->withPeople($people); // set key(withPeople) and variable(param) for passing to view (we said chaining noe 2)

    return View::make('about', compact('people')); // used this syntax called facad View::make
});*/


Route::group(['middleware' => ['web']], function () {

    Route::get('cont', 'pagesController@home');
    Route::get('about', 'pagesController@about');
    Route::get('card', 'cardsController@index');
    Route::get('card/{card}', 'cardsController@show'); // {card} name is wildcard
    Route::post('card/{card}/notes', 'NotesController@store'); // save note
    Route::get('note/{note}/edit', 'NotesController@edit'); // show for edit note
    Route::patch('notes/{note}', 'NotesController@update'); // update note

});