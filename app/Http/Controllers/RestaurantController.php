<?php

 namespace App\Http\Controllers;

 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;

class RestaurantController extends Controller
{
	
	public function actionVer()
	{
		return view('restaurant/verrestaurant');
	}
}

?>