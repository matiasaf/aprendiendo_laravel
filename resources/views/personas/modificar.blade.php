@extends('layout')
@section('titulo', 'Editar Persona')

@section('contenido')
<div class="container">

  <h2 class="center-align">Editar datos de Persona</h2>

  <form method="post" action="{{route('persona.update',['id' => $persona->id ]) }}">

    @method('PUT')
    @csrf

    <div class="row">
      <div class="col l6 offset-l2">
        <h5>Datos Personales</h5>
      </div>
    </div>

    <div class="row">
      <div class="col l4 offset-l2 input-field">
        <input id="apellido" value="{{$persona->apellido}}" name="apellido" type="text" class="validate" required>
        <label for="apellido">Apellido</label>
      </div>
      <div class="col l4 input-field">
        <input id="nombre" value="{{$persona->nombre}}" name="nombre" type="text" class="validate" required>
        <label for="nombre">Nombre</label>
      </div>
    </div>
    <div class="row">
      <div class="col l4 offset-l2 input-field">
        <input type="date" value="{{ $persona->fecha_nacimiento }}"name="fecha_nacimiento" >
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
      </div>
      <div class="col l4 input-field">
        <select id="genero" value="{{ $persona->genero }}" name="genero" >
          <option value="" disabled selected>Seleccionar género</option>
          <option value="1">Femenino</option>
          <option value="2">Masculino</option>
        </select>
        <label>Género</label>
      </div>
    </div>
    <div class="row">
      <div class="col l6 offset-l2">
        <h5>Datos de contacto</h5>
      </div>
    </div>
    <div class="row">
      <div class="col l4 offset-l2 input-field">
        <input id="domicilio" value="{{$persona->domicilio}}"name="domicilio" type="text" class="validate" >
        <label for="domicilio">Domicilio</label>
      </div>
      <div class="col l4 input-field">
        <input id="email" value="{{$persona->email}}" name="email" type="email" class="validate" required>
        <label for="email">E-Mail</label>
      </div>
    </div>
    <div class="row">
      <div class="col l6 offset-l2">
        <h5>Otros datos</h5>
      </div>
    </div>
    <div class="row">
      <div class="col l6 offset-l2 input-field">
        <select name="organismo_id" required>

          @foreach ($organismos as $organismo)

            <option value="{{$organismo->id}}" {{$organismo->id === $persona->organismo->id ? 'selected': ''}}>
              {{$organismo->nombre}}
            </option>

          @endforeach
        </select>
        <label>Organismo</label>
      </div>
    </div>
    <div class="row">
      <div class="col l8 offset-l2">
        <button class="btn waves-effect waves-light right" type="submit">Enviar
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>
@endsection
