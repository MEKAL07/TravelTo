@extends('layout.template')
@section('CuerpoPrincipal')
	<hr>
	<div> <div><div class="divBuscar">
		<input type="text" name="txtBuscar" id="txtBuscar" >
		<input type="button" name="btnBuscar" id="btnBuscar" value="SEARCH">
	</div></div> </div><br><br><br>
	<div class="divFormuRegistro">
	
		<div class="divTransicion">
			<div style="overflow:hidden; width:960px; margin: 10px auto; padding:0 10px; background-color: red;"> 
	            <div class="pix_diapo">

	            	<div data-thumb="img/nfspp.jpg" data-time="7000">
	                        <img src="img/nfspp.jpg" width="100%" height="100%">
	                        <div class="caption elemHover fromLeft">
	                            This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
	                        </div>
	                </div>

					<div data-thumb="img/personitas.jpg">
	                        <img src="img/personitas.jpg" width="100%" height="100%"> 
	                        <div class="caption elemHover fromRight" style="bottom:65px;  color:#ff0; text-transform:uppercase">
	                            Here you can see two captions.
	                        </div>
	                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
	                            The first are loadedssssss immediately before than the second one
	                        </div>
	                </div>
	                <div data-thumb="img/catmit.jpg">
	                        <img src="img/catmit.jpg" width="100%" height="100%"> 
	                        <div class="elemHover caption fromLeft" style="bottom:70px; width:auto; border-top-right-radius: 6px; border-bottom-right-radius: 6px; font-size: 30px">
	                            Gatos del campo disfrutando la leche fresca, recien ordeñada.
	                        </div>                        
	                </div>
	            </div>
	        </div>
		</div><br><br>
		<div class="divSesion">
			<form>
				<label for="txtEmail">Email : </label><br>
				<input type="email" id="txtEmail" name="txtEmail" class="txt"><br><br>

				<label for="txtPassword">Password : </label><br>
				<input type="password" id="txtPassword" name="txtPassword" class="txt"><br><br>

				<input type="button" name="btnCancelar" id="btnCancelar" value="CANCELAR" class="btnError">
				<input type="button" name="btnIniciar" id="btnIniciar" value="INICIAR" class="btnR"><br><br>
				
				<a href="{{url('tourist/register')}}"> Registrarme </a><br><br>
			</form>
			

		</div><br><br>
		<div class="divTransicion1">
			transicion uno
		</div>
		
	</div>
	
@endsection