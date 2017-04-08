<?php

/*rutas de inicio*/
Route::get('/', 'IndexController@actionIndex');
Route::match(['get', 'post'], '/tourist/register', 'TuoristController@actionRegister');

/*Route::get('/', function () {
    return view('welcome');
});*/

?>