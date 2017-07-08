<?php
/*rutas de inicio PAGINA PRINCIPAL*/
Route::get('/', 'IndexController@actionIndex');

/*entrada a inicio de sesion*/
Route::get('/index/index', 'IndexController@actionInicioSesion');


/*rutas para usuarios*/
Route::match(['get', 'post'], '/turista/register', 'TuoristController@actionRegister');
Route::get('/turista/ver', 'TuoristController@actionVer');
Route::get('/turista/editar/{idUsuario}', 'TuoristController@actionUpdate');
Route::post('/turista/editar', 'TuoristController@actionUpdate');
Route::get('/turista/eliminar/{idUsuario}' , 'TuoristController@ActionDelete');


/*rutas para inicio de sesion*/
Route::post('/turista/login', 'TuoristController@actionLoggin');
Route::get('/turista/logout', 'TuoristController@actionLogOut');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::match(['get', 'post'], '/travelto/ver', 'TravelToController@actionVer');
Route::get('/restaurant/verrestaurant', 'RestaurantController@actionVer')
?>