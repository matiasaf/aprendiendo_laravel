@extends('layout')
@section('titulo', 'Listado de Personas')

@section('contenido')
<div class="container">
	<h2 class="center-align">Listado de Personas</h2>
	<a class="btn-floating right" href="{{route('persona.alta.view')}}"><i class="material-icons">add</i></a>
	<br>
	<table class="centered">
		<thead>
			<tr>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>E-mail</th>
				<th>Organismo</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>

			@foreach ($personas as $persona)
				<tr>
					<td>{{$persona->apellido}}</td>
					<td>{{$persona->nombre}}</td>
					<td>{{$persona->email}}</td>
					<td>{{$persona->organismo->nombre}}</td>
					<td>
						<i class="material-icons">remove_red_eye</i>
						<a href="{{route('persona.modificar.view',[ 'id' => $persona->id ])}}"><i class="material-icons">edit</i></a>

						<i class="material-icons" onclick="eliminar({{$persona->id}})">delete</i>
					</td>
				</tr>

			@endforeach

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
			axios.delete('');
		}
	}
</script>
@endsection
