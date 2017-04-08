<!DOCTYPE html>
<html lang="ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta name="viewport" content="width=960"> 
	<title>TravelTo</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssNavegador.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssSection1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssFooter.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/diapo1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ubicaImg.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cssFormularios.css')}}">

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mobile-1.0rc2.customized.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.hoverIntent.minified.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/diapo.js')}}"></script>
</head>
<body>
	<div>
		
	</div>
	<header>
		<div>
			<nav id="navegador">
				<ul>
					<li><a href="{{url('/')}}">HOME</a></li>
					<li><a href="#"> CONTACT US</a></li>
					<li><a href="#"> HELP</a></li>
					<li><a href="{{url('tourist/register')}}"> REGISTER</a></li>
				</ul>
				
			</nav>
		</div>
	</header>
	<section class="cuerpoSection1">

		
		@yield('CuerpoPrincipal')
	</section>

	<footer>
		<div id="pie">facebook</div>
		<div id="pie">youtube</div>
		<div id="pie">twitter</div>
		<div id="pie">Instagram</div>
	</footer>

</body>

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
</html>