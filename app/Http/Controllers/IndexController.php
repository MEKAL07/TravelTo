<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* 
*/
class IndexController extends Controller
{
	public function actionInicioSesion(){
		return view('index/index');
	}
	
	public function actionIndex()
	{
		return view('index/indexsesion');
	}
}

?>