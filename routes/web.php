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
Route::get('/gracias', function(){
    return view('app.gracias');
});
Route::get('/no-exitosa', function(){
    return view('app.no-exitosa');
});
Route::get('/pendiente', function(){
    return view('app.pendiente');
});
Route::resource('/basicemail', 'MailController@basic_email');
Route::get('/mensaje-enviado', function(){
    return view('app.mensaje-enviado');
});