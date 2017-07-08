<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta name="viewport" content="width=960"> 
	<title>TravelTo</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssInicio.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssSection1.css')}}">
</head>
<div>
	<div class="InicioTravelTO">	
			
	    <div class="divInicioSesion">

			<div class="divTravelTO">
				O N E   T R A V E L  T O
			</div>

			<div class="divBotonSesion">
				<input type="button" name="sesion" value="Iniciar Sesión" class="btnInicio" onclick="InicioSesion();" >
			</div>
		</div> 
		
		<div class="divFrase">
			<h1> T R A V E L   T O.</h1>
			<p> VIAJA DONDE QUIERAS, VIAJA CON NOSOTOROS, VIAJA SEGURO, VÍVELO. </p> 
		</div>
	</div>
	<hr>
	<div class="divDispositivos">
		<p> puedes guiarte con cualquier dispositivo, desde cualquier sitio </p>
		<div class="divPc"> 
			<img src="img/pc.png" width="60%" height="70%">
		</div>
		<div class="divLap"> 
			<img src="img/lap.png" width="60%" height="70%">
		</div>
		<div class="divTablet"> 
			<img src="img/lap.png" width="60%" height="70%">
		</div>
		<div class="divCelular">
			<img src="img/lap.png" width="60%" height="70%">
		</div>
	</div>
	<hr>
	<div class="divSuscripciones">
		<div id="divBotonSuscribir">
			<input type="button" name="Suscribirse" value="S U S C R I B I R S E" class="btnSuscribirse" onclick="Suscripcion();" >
		</div>

		<div id="divPoliticas">
			<h3> las politicas de suscripcion, son garantias de la seguridad que ToTravel brinda durante su viaje, si Ud. está suscrito en ToTravel 
				<a href="#">mas Informacion.. </a>
			</h3>
		</div>

	</div>

	

</div>
<script type="text/javascript">
	function InicioSesion(){
		window.location.href='{{url('index/index')}}';
	}

	function Suscripcion(){
		window.location.href='{{url('turista/register')}}';
	}

</script>