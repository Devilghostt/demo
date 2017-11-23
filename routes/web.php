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
Route::group(['namespace'=>'Backend'],function (){
    Route::post('registrar','RegistroController@store')->name('registrar');
    Route::get('registro','RegistroController@create')->name('registro');
});
Route::group(['namespace'=>'Frontend'],function (){
    Route::get('/','WebPageController@index')->name('/');
    Route::get('index2','WebPageController@index2')->name('index2');
    Route::get('eventos','WebPageController@eventos')->name('eventos');
    Route::get('cursos','WebPageController@cursos')->name('cursos');
    Route::get('programas','WebPageController@programas')->name('programas');

    //Mostrar el formulario de logeo
    Route::get('loguear','WebPageController@mostrarLoginForm')->name('loguear');
    //Validacion de usuaurio o admin
    Route::get('usuario','ValidatorFormController@usuario')->name('usuario');
    Route::get('admin','ValidatorFormController@admin')->name('admin');



});
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logaut','Auth\LoginController@logaut')->name('logaut');






