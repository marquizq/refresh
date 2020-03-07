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


Route::get('info', function () {
    $informations = ['This ', 'is ', 'Michael Page'];
    // return view('info')->with(['informations'=>$informations]);
    // return view('info')->withInformations($informations);
    return view('info',compact('informations'));
});
