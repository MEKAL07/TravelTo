<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* 
*/
class TravelToController extends Controller
{
	
	public function actionVer()
	{
		return view('travelto/ver');
	}
}


?>