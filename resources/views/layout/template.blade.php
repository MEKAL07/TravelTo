<!DOCTYPE html>
<html lang="ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta name="viewport" content="width=960"> 
	<title>TravelTo</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssNavegador.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssIndexSection1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssFooter.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/diapo1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ubicaImg.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssFormularios.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssVer.css')}}">

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mobile-1.0rc2.customized.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.hoverIntent.minified.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/diapo.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/validaciones.js')}}"></script>
	<noscript> lo sentimos su navegador no soporta esta pagina web :(,  \n 
			   te invitamos a actualizar tu navegador en:
		<br>
		<a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a>
		<br>
		<a href="#"> Google Chrome</a>
	</noscript>
</head>
<body>
	<div>
		
	</div>
	<header>
		<div>
			<nav id="navegador">
				<ul>
					<li><a href="{{url('index/index')}}">HOME</a></li>
					<li><a href="{{url('turista/register')}}">  REGISTARSE</a></li>
					<li><a href="#"> CONTÁCTANOS </a></li>
					<li><a href="#"> AYUDA </a></li>
					
					<li><a href="{{url('travelto/ver')}}"> TravelTo</a></li>
					<li><a href="{{url('restaurant/verrestaurant')}}" target="_blank"> Restaurant</a></li>
				</ul>
				
			</nav>

			<nav id="navRight">
				@if(Session::has('idUsuario'))
					<img src="{{asset('img/avatar').'/'.Session::get('idUsuario').'.'.Session::get('avantarExtension')}}" width="30px" height="30px" style="display: inline-block;vertical-align: middle;">
					<span style="vertical-align: middle;" >{{Session::get('email')}}</span>					
					<a href="{{url('turista/logout')}}" style="color: #ffffff;" >Cerrar Sesíon</a>
				@else
					<span>Anónimo</span>
				@endif
			</nav>

		</div>
	</header>
	<section class="cuerpoSection1">		
		@yield('CuerpoPrincipal')
	</section>

	<section class="cuerpoSection2">		
		
		<div id="divMensajeGeneral">
			@if(Session::has('mensajeAlerta'))
				<script type="text/javascript">
					$('#divMensajeGeneral').html('{{Session::get('mensajeAlerta')}}');
					$('#divMensajeGeneral').css({'background-color' : '{{Session::get('color')}}'});
				</script>
			@endif

			@yield('CuerpoRegistro')	
		</div>
	</section>
	<br><br>
	<footer>
		<div id="pie">
			<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">F A C E B O O K</a>
		</div>
		<div id="pie">
			<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">Y O U T U B E</a>
		</div>
		<div id="pie">
			<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">T W I T T E R</a>
		</div>
		<div id="pie">
		<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">I N S T A G R A M</a>
		</div>
	</footer>

</body>

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
</html>