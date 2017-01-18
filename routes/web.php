<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'InicioController@index');
Route::get('/proteina', function(){
    return view('app.proteina');
});
Route::get('/creatina', function(){
    return view('app.creatina');
});
Route::get('/glutamina', function(){
    return view('app.glutamina');
});
Route::get('/pagos-y-envios', function(){
    return view('app.pagos-y-envios');
});
Route::get('/contacto', function(){
    return view('app.contacto');
});
Route::resource('/basicemail', 'MailController@basic_email');