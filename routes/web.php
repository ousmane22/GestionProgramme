<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pages routes
Route::view('/acceuil','pages.acceuil');
Route::view('/aboutus','pages.aboutus');
Route::view('/file','inc.file');


// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

//Admin login
Route::namespace('Admin')->group(function() {
    Route::get('admin.login','auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin.login','auth\LoginController@login')->name('admin.log');
});
 Route::get('admin.home','AdminController@index')->name('admin.home');

//programme route
Route::get('programme.programmeProf','ProgrammeController@showProg')->name('programme');
Route::get('programme.show/{NOM}','ProgrammeController@showfil')->name('show.programme');
Route::get('programme.description/{NOM}','ProgrammeController@showdescription')->name('show.description');


//PROGRAMME TECHNIQUE ROUTE
Route::get('programme.Technique','PROTECHController@index')->name('show.serie');

//filiere route
Route::get('filiere.show','FiliereController@index');

//statut route
Route::get('statut.show','TYPESTATUTController@index');

//modalite route
Route::get('modalite.show','ModaliteController@index');

//validation route
Route::get('validation.show','ValidationController@index');
