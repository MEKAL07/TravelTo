@extends('layout.template')
@section('CuerpoRegistro')
<hr>
<div class="divVerLista">
	<P> REGISTRO DE TravelTo</P>
	<div class="divBotonAgregar">
		<input type="button" name="btnAgregar" id="btnAgregar" class="btnA" value="AGREGAR">		
		<hr>
	</div>
	<!--div class="divBusqueda1">		
		<input type="text" name="txtBusquedaTravel" id="txtBusquedaTravel" class="txtBusqueda" placeholder="buscar" >
	</div-->
	<div id="divBotones">	
		<div class="divBusqueda">		
			<input type="text" name="txtBusquedaTravel" id="txtBusquedaTravel" class="txtBusqueda" placeholder="buscar" >
		</div>
		<div class="divBotonExport">
			<input type="button" name="btnAgregar" id="btnAgregar" class="btnEP" value="EXPORTAR A PDF">
			<input type="button" name="btnAgregar" id="btnAgregar" class="btnEE" value="EXPORTAR A EXCEL"><br>
		</div>
		<hr>
	</div>
	
	<div class="divTable">
		

		<table border="1">
			<thead>
				<tr>
					<td>N°</td>
					<td>NOMBRE</td>
					<td>DESCRIPCION</td>
					<td>FECHA FESTIVO</td>
					<td>REGION</td>
					<td>PROVINCIA</td>
					<td>DISTRITO</td>
					<td>COMUNIDAD</td>
					<td>DISTANCIA</td>
					<td>IMAGEN</td>
					<td align="center">ACCIONES</td>					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>
						<input type="button" name="btnAgregar" id="btnAgregar" class="btnE" value="EDITAR">
						<input type="button" name="btnAgregar" id="btnAgregar" class="btnD" value="ELIMINAR">
					</th>
				</tr>
			</tbody>

			<thead>
				<tr>
					<td>N°</td>
					<td>NOMBRE</td>
					<td>DESCRIPCION</td>
					<td>FECHA FESTIVO</td>
					<td>REGION</td>
					<td>PROVINCIA</td>
					<td>DISTRITO</td>
					<td>COMUNIDAD</td>
					<td>DISTANCIA</td>
					<td>IMAGEN</td>
					<td align="center">ACCIONES</td>					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>
						<input type="button" name="btnAgregar" id="btnAgregar" class="btnE" value="EDITAR">
						<input type="button" name="btnAgregar" id="btnAgregar" class="btnD" value="ELIMINAR">
					</th>
				</tr>
			</tbody>
			
		</table>
	</div>
</div>
@endsection