@extends('layout')
@section('titulo', 'Listado de Personas')

@section('contenido')
<div class="container">
	<h2 class="center-align">Listado de Personas</h2>
	<a class="btn-floating right" href=""><i class="material-icons">add</i></a>
	<br>
	<table class="centered">
		<thead>
			<tr>
				<th>DNI</th>
				<th>Apellido</th>
				<th>Nombbre</th>
				<th>Organismo</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>36910259</td>
				<td>Lopez</td>
				<td>Anibal Francisco</td>
				<td>Dirección General de Informática</td>
				<td>
					<i class="material-icons">remove_red_eye</i>
					<i class="material-icons">edit</i>
					<i class="material-icons" onclick="eliminar(36910259)">delete</i>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	function eliminar(dni)
	{
		var r = confirm("¿Seguro/a que desea eliminar esta persona?");
		if (r == true)
		{
			//redirigir eliminar
		} 
	}
</script>
@endsection