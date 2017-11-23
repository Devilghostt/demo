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

    /////vistas de personas
    Route::get('/','WebPageController@index')->name('/');
    Route::get('eventos','WebPageController@eventos')->name('eventos');
    Route::get('cursos','WebPageController@cursos')->name('cursos');
    Route::get('programas','WebPageController@programas')->name('programas');

    //// vista usuarios
    Route::get('index2','WebPageController@index2')->name('index2');

    /// vista afiliados


    ///// vista admin
    Route::get('index3','WebPageController@index3')->name('index3');
    Route::get('publicaciones','WebPageController@publicaciones')->name('publicaciones');
    Route::get('eventos3','WebPageController@eventos3')->name('eventos3');
    Route::get('implementosdeportivos','WebPageController@implementosdeportivos')->name('implementosdeportivos');
    Route::get('implementos','WebPageController@implementos')->name('implementos');
    Route::get('reservaimplementosdeportivos','WebPageController@reservaimplementosdeportivos')->name('reservaimplementosdeportivos');
    Route::get('prestamoimplementosdeportivos','WebPageController@prestamoimplementosdeportivos')->name('prestamoimplementosdeportivos');
    Route::get('elementoseventos','WebPageController@elementoseventos')->name('elementoseventos');
    Route::get('registroelementoseventos','WebPageController@registroelementoseventos')->name('registroelementoseventos');
    Route::get('reservaelementoseventos','WebPageController@reservaelementoseventos')->name('reservaelementoseventos');
    Route::get('alquilerelementos','WebPageController@alquilerelementos')->name('alquilerelementos');
    Route::get('afiliadosaccion','WebPageController@afiliadosaccion')->name('afiliadosaccion');
    Route::get('registroafiliadosaccion','WebPageController@registroafiliadosaccion')->name('registroafiliadosaccion');
    //Mostrar el formulario de logeo
    Route::get('loguear','WebPageController@mostrarLoginForm')->name('loguear');

    //Validacion de usuaurio o admin
    Route::get('usuario','ValidatorFormController@usuario')->name('usuario');
    Route::get('admin','ValidatorFormController@admin')->name('admin');



});
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logaut','Auth\LoginController@logaut')->name('logaut');






