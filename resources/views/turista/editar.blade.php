@extends('layout.template')
@section('CuerpoPrincipal')
<hr>
<div class="divFormuRegistro">
	<div id="divCabeceraRegistro">
		<p>CREA TU CUENTA EN TravelTo</p>
	</div>	

	<div class="divIzquierda">
		<p>Te informamos a detalle del lugar que quieres visitar</p>
		<img src="../img/catdog.jpg" width="100%" height="100%">
	</div>

	<div class="divDerecha">
		<form id="frmEditarUsuario" action="{{url('turista/editar')}}" method="post" enctype="multipart/form-data">
			<label for="txtNombre">Nombre (*) </label><br>
			<input type="text" name="txtNombre" id="txtNombre" class="txt" onkeypress="return tabular(event,this)" placeholder="Name"><br><br>

			<label for="txtApellidos">Apellido (*) </label><br>
			<input type="text" name="txtApellidos" id="txtApellidos" class="txt" onkeypress="return tabular(event,this)" placeholder="Last-name"><br><br>

			<label for="txtEmail">Correo/E-mail (*) </label><br>
			<input type="email" name="txtEmail" id="txtEmail" class="txt" onkeypress="return tabular(event,this)"  placeholder="example@gmail.com"><br><br>

			<!--label for="txtPassword">Password (*) </label><br>
			<input type="password" name="txtPassword" id="txtPassword" class="txt" onkeypress="return tabular(event,this)" placeholder="*********"><br><br>

			<label for="txtPassword2">Confirm Password (*) </label><br>
			<input type="password" name="txtPassword2" id="txtPassword2" class="txt" onkeypress="return tabular(event,this)" placeholder="*********"><br><br-->

			<label for="fileAvatar">Avatar</label>
		    <input type="file" name="fileAvatar" id="fileAvatar"><br><br>

			<label for="fechaNacimiento">Fecha Nacimiento (*) </label><br>
			<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="txtd" onkeypress="return tabular(event,this)" placeholder="07">
			<select class="sexo" id="mes" name="mes" onkeypress="return tabular(event,this)">
				<option id="M">Mes</option>
				<option id="01">enero</option>
				<option id="02">febrero</option>
				<option id="03">marzo</option>
				<option id="04">abril</option>
				<option id="05">mayo</option>
				<option id="06">junio</option>
				<option id="07">julio</option>
				<option id="08">agosto</option>
				<option id="09">septiembre</option>
				<option id="10">octubre</option>
				<option id="11">noviembre</option>
				<option id="12">diciembre</option>
			</select>
			<input type="text" name="fechaAnio" id="fechaAnio" class="txta" onkeypress="return tabular(event,this)" placeholder="1999"><br><br>
			<label for="txtPais">Pais (*) </label><br>
			<input type="text" name="txtPais" id="txtPais" class="txt" onkeypress="return tabular(event,this)" placeholder="City"><br><br>

			<label for="txtCelular">Teléfono (*) </label><br>
			<input type="text" name="txtCelular" id="txtCelular" class="txt" onkeypress="return tabular(event,this)" placeholder="999999999"><br><br>

			
			<label for="textSexo">Sexo (*) </label><br>
			<select class="sexo" id="textSexo" name="textSexo" >
				<option id="M">Género</option>
				<option id="M">Masculino</option>
				<option id="F">Femenino</option>
			</select><br><br>

			<input type="checkbox" name="cboAceptar" >
			<a href="#">Términos y condiciones</a>



			<br><br>
			{{csrf_field()}}
			<input type="button" name="btnRegistrar" id="btnRegistrar" class="btnR" value="EDITAR" onclick="editarUsuario();"><br><br>

			<h5>todos los (*) son obligatorios</h5>
		</form>
		<a href="#">Mas Informacion</a>
		sobre esta pagina de ayuda, nuestras politicas se aplican despues de la confirmacion del correo
		electrónico.
	</div>
</div>

<script type="text/javascript">
	function editarUsuario(){
		if(Confirm('confirmar registro')){
			$('#frmEditarUsuario').submit();
		}
	}
</script>
@endsection