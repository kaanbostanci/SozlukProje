<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Ön Kısım rotasyonları*/

Route::get('/','Frontend_HomeController@home');
Route::get('kayitol','Frontend_HomeController@kayitol');
Route::get('giris','Frontend_HomeController@giris');
Route::post('girispost','Frontend_HomeController@girispost');

Route::post('adminpost','Backend_LoginController@loginpost');
Route::get('admin','Backend_LoginController@login');
Route::get('login','Backend_LoginController@login');
Route::get('logout','Backend_LoginController@logout');
Route::get('moderator','Backend_LoginController@modlogin');
Route::post('modpost','Backend_LoginController@modloginpost');

/*Admin Kısım Rotasyonları*/

Route::group(array('before' => 'auth'), function()
{
    
Route::controller('panel','Backend_PanelController');
Route::controller('modpanel','Backend_ModController');
Route::controller('kullanici','Backend_KullaniciController');
Route::controller('entry','Backend_EntryController');
Route::controller('modentry','Backend_ModentryController');
Route::controller('kayitol','Frontend_KayitController');
Route::controller('giris','Frontend_HomeController');
Route::controller('girispost','Frontend_HomeController');
});


