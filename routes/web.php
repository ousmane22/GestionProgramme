<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pages routes
Route::view('/acceuil', 'pages.acceuil');
Route::view('/aboutus', 'pages.aboutus');
Route::view('/file', 'inc.file');


// Example Routes
// Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function () {
  return view('dashboard');
});

//Admin ROUTE
Route::get('admin/home', 'HomeController@admin')->middleware('admin');
Route::get('admin/user', 'UsersController@index')->middleware('admin')->name('show.user');
Route::get('admin.addUser', 'UsersController@AddUser')->middleware('admin')->name('user.add');
Route::post('admin', 'UsersController@store')->name('store.user')->middleware('admin');
Route::get('admin/userEdit/{id}', 'UsersController@edit')->name('edit.user')->middleware('admin');
Route::post('admin/userUpdate/{id}', 'UsersController@update')->name('update.user')->middleware('admin');
Route::get('admin/userDelete/{id}', 'UsersController@destroy')->name('delete.user')->middleware('admin');
Route::get('programme.add', 'AdminController@addProgramme')->name('add.programme')->middleware('admin');
Route::post('programme', 'AdminController@store')->name('store.programme')->middleware('admin');
Route::get('programme.liste', 'AdminController@ListProgramme')->name('liste.programme')->middleware('admin');
//programme delete and edit
Route::get('programme.edit/{id}', 'AdminController@edit')->name('edit.programme')->middleware('admin');
Route::post('programme.update/{id}', 'AdminController@update')->name('update.programme')->middleware('admin');
Route::get('programme.delete/{id}', 'AdminController@destroy')->name('delete.programme')->middleware('admin');

//update etat programme
// Route::get('admin/home/{id}', 'HomeController@updateEtatProgramme')->middleware('admin');
Route::get('admin.GetDemande', 'HomeController@getDemande')->middleware('admin')->name('getdemande');
Route::get('admin.validerProgramme/{id}','HomeController@validerProgramme')->middleware('admin')->name('validerProgramme');
Route::get('admin.rejeterProgramme/{id}', 'HomeController@rejeterProgramme')->middleware('admin')->name('rejeterProgramme');




//Route user
Route::get('user/home', 'HomeController@user')->middleware('user');

//store renseignement etablissement
Route::post('user/home', 'HomeController@AddRenseigneEta')->name('show.RE')->middleware('user');
Route::get('user/RenseignerEta', 'HomeController@RenseignerEta')->name('re.etablissement')->middleware('user');
Route::post('user','HomeController@StoreRenseignerEta')->name('renseiger.etablissement')->middleware('user');



//programme route
Route::get('programme.programmeProf', 'ProgrammeController@showProg')->name('programme');
Route::get('programme.show/{id}', 'ProgrammeController@showfil')->name('show.programme');
Route::get('programme.description/{NOM}', 'ProgrammeController@showdescription')->name('show.description');


//PROGRAMME TECHNIQUE ROUTE
Route::get('programme.Technique', 'PROTECHController@index')->name('show.serie');
Route::get('programme.showClasse', 'PROTECHController@showClasse')->name('show.classe');





//EFPT ROUTES
Route::get('/EFPT.show', 'EFPTController@index');
Route::get('/EFPT.departement/{NOM_DEPT}', 'EFPTController@Showdepartement')->name('departement.show');
Route::get('/EFPT.departInfo/{id}', 'EFPTController@DepartWithEtabli')->name('depart.eta');
Route::get('/EFPT.showProg/{id}', 'EFPTController@ProparEtablissement')->name('prog.eta');
Route::get('/EFPT.infoPro/{id}', 'EFPTController@ProgrammeInfo')->name('prog.info');




//docs Route
Route::get('/documents.documents', function () {
  $path = "files/guide_formateur.pdf";
  $path = "files/Guide EVALUATION.pdf";
  $path = "files/loi-d-orientation.pdf";
  header('content-type:application/pdf');
  echo file_get_contents($path);
});
Route::view('documents.documents', 'documents.documents');

//filiere route
Route::get('filiere.show', 'FiliereController@index');

//statut route
Route::get('statut.show', 'TYPESTATUTController@index');

//modalite route
Route::get('modalite.show', 'ModaliteController@index');

//validation route
Route::get('validation.show', 'ValidationController@index');

//utilisateur Route

  Route::get('utilisateur/login', 'Utilisateur\Auth\LoginController@showLoginForm');
  Route::post('utilisateur/login', 'Utilisateur\Auth\LoginController@login');
  Route::post('utilisateur/logout', 'Utilisateur\Auth\LoginController@logout');



  Route::get('utilisateur/register', 'Utilisateur\Auth\RegisterController@showRegistrationForm');
  Route::post('utilisateur/register', 'Utilisateur\Auth\RegisterController@register');

  Route::post('utilisateur/password/email', 'Utilisateur\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('utilisateur/password/reset', 'Utilisateur\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('utilisateur/password/reset', 'Utilisateur\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('utilisateur/password/reset/{token}', 'Utilisateur\Auth\ResetPasswordController@showResetForm');
 
  //demande programme Route
Route::post('aaa/', 'DProgrammeController@store')->name('store.DP');
Route::get('/utilisateur/acceuil/{id}', 'DProgrammeController@getidProgramme')->name('getidProgramme')->middleware('utilisateur');
Route::get('/MesProgrammes', 'DProgrammeController@UtilisateurProgramme')->name('UtilisateurProgramme')->middleware('utilisateur');

//Referentile Route
Route::get('/refe','ReferentielController@RefenctielProgramme')->name('referentielProgramme');
Route::post('/','ReferentielController@StoreReferentileWithProgramme')->name('storeRef');
Route::get('OpenReferentiel/{id}', 'DProgrammeController@ifDemandeIsValid')->name('getReferentiel');






