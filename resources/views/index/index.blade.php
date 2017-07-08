@extends('layout.template')
@section('CuerpoPrincipal')
	<hr>
	<div> <div><div class="divBuscar">
		<input type="text" name="txtBuscar" id="txtBuscar" >
		<input type="button" name="btnBuscar" id="btnBuscar" value="SEARCH">
	</div></div> </div><br><br><br>
	<div class="divFormuRegistro1">
	
		<div class="divTransicion">
			<div style="overflow:hidden; width:960px; margin: 10px auto; padding:0 10px; "> 
	            <div class="pix_diapo">

	            	<div data-thumb="../img/nfspp.jpg" data-time="7000">
	                        <img src="../img/nfspp.jpg" width="100%" height="100%">
	                        <div class="caption elemHover fromLeft">
	                            This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
	                        </div>
	                </div>

					<div data-thumb="../img/personitas.jpg">
	                        <img src="../img/personitas.jpg" width="100%" height="100%"> 
	                        <div class="caption elemHover fromRight" style="bottom:65px;  color:#ff0; text-transform:uppercase">
	                            Here you can see two captions.
	                        </div>
	                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
	                            The first are loadedssssss immediately before than the second one
	                        </div>
	                </div>
	                <div data-thumb="../img/catmit.jpg">
	                        <img src="../img/catmit.jpg" width="100%" height="100%"> 
	                        <div class="elemHover caption fromLeft" style="bottom:70px; width:auto; border-top-right-radius: 6px; border-bottom-right-radius: 6px; font-size: 30px">
	                            Gatos del campo disfrutando la leche fresca, recien ordeñada.
	                        </div>                        
	                </div>
	                <div data-thumb="../img/catmit.jpg">
		                    <!--video src="../video/danielF.mp4"
								controls="controles" preload="cargar" autoplay="autoplay" loop="loop" 
								width="100%" height="100%">
								<source src="aw.oog" type="video/ogg"/>
								<source src="aw.mp4" type="video/mp4"/>
								<source src="aw.webn" type="video/webn"/>
								
								este navegador no soporta el video
							</video--> 
	                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
	                            Daniel F .- Nunca encontrare a alguien que se parezca a ti
	                        </div>                        
	                </div>
	            </div>
	        </div>
		</div><br><br>


		<div class="divSesion">
			<form action="{{url('turista/login')}}" method="post">
				<p style="float: left;">Iniciar Sesión</p><br><br><br>
				<label for="txtEmailLogin">Email : </label><br>
				<input type="email" id="txtEmailLogin" name="txtEmailLogin" class="txt"><br><br>

				<label for="txtPasswordLogin">Password : </label><br>
				<input type="password" id="txtPasswordLogin" name="txtPasswordLogin" class="txt"><br><br>

				<a href="#">Facebook</a><br>
				<a href="#">LinkIn</a><br><br>

				<a href="#">¿Olvidaste tu Email o contraseña?</a><br><br>
				{{csrf_field()}}
				<input type="submit" name="btnIniciar" id="btnIniciar" value="INICIAR" class="btnR"><br><br>
				<hr>
								
				<a href="{{url('turista/register')}}"> Registrarme </a><br><br>
			</form>
			

		</div>

		
		<hr>
		<div id="divFotos">
			<div class="fotos">			
				<img src="../img/f1.jpg" height="100%" ; width="100%";>
			</div>

			<div class="fotos">
				<img src="../img/f2.jpg" height="100%" ; width="100%";>
			</div>
			<div class="fotos">
				<img src="../img/f3.jpg" height="100%" ; width="100%";>				
			</div>

			<div class="fotos">
				<img src="../img/f4.jpg" height="100%" ; width="100%";>
			</div>

			<div class="fotos">
				<img src="../img/f5.jpg" height="100%" ; width="100%";>
			</div>

			<div class="fotos">
				<img src="../img/f6.jpg" height="100%" ; width="100%";>
			</div>

			<div class="fotos">
				<img src="../img/f7.jpg" height="100%" ; width="100%";>
			</div>
			<div class="fotos">
				<img src="../img/f8.jpg" height="100%" ; width="100%";>
			</div>
			<div class="fotos">
				<img src="../img/f9.jpg" height="100%" ; width="100%";>
			</div>
			<div class="fotos">
				<img src="../img/nfspp.jpg" height="100%" ; width="100%";>
			</div>
		</div>
		

		<hr>
		<div class="divTransicion1">
			
			<label for="comentario">Comentario</label><br>
			<textarea id="comentario" name="comentario" rows="4" cols="100" class="textComentario"></textarea>
			<input type="button" name="btnCOmentario" id="btnCOmentario" value="comentar"  >

		</div>
		
	</div>
	
@endsection