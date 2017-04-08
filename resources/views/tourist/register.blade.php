@extends('layout.template')
@section('CuerpoPrincipal')

<div class="formuRegistro">
	<div class="cabecera">
		<p>CREA TU CUENTA EN TravelTo</p>
	</div>	
	<div class="izquierda">
		<p>Te informamos a detalle del lugar que quieres visitar</p>
		<img src="../img/catdog.jpg" width="100%" height="100%">
	</div>
	<div class="derecha">
		<form id="frmRegister" action="{{url('tourist/register')}}" method="post" enctype="multipart/form-data">
			<label for="txtNombre">Nombre/Name : </label><br>
			<input type="text" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Apellido/Last-name : </label><br>
			<input type="text" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Correo/E-mail : </label><br>
			<input type="email" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Password</label><br>
			<input type="password" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Confirm Password : </label><br>
			<input type="password" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Teléfono/Phone : </label><br>
			<input type="text" name="txtNombre" id="txtNombre" class="txt"><br><br>

			<label for="txtNombre">Sexo</label><br>
			<input type="text" name="txtNombre" id="txtNombre" class="txt"><br><br>
			{{csrf_field()}}
			<input type="button" name="btnRegistrar" id="btnRegistrar" class="btnR" value="REGISTRAR"><br><br>

		</form>
	</div>
</div>
@endsection