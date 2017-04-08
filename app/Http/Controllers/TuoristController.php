<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* 
*/
class TuoristController extends Controller
{
	
	public function actionRegister()
	{
		return view('tourist/register');
	}
}
?>