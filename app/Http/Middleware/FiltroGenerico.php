<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

/**
* 
*/
class FiltroGenerico
{
	
	public function handle($request, Closure $next)
	{
		$url=$request->url();

		if (!(Session::has('idUsuario')) && $url!='http://localhost/TravelTo/public/index/index' && !($request->has('txtEmailLogin')))
        {
            return redirect('/index/index');
        }

        $response = $next($request);

        //after request

        return $response;
	}
}

?>