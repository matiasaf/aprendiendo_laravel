@extends('layout')
@section('titulo', 'Alta de Persona')

@section('contenido')
<div class="container">
  <h2 class="center-align">Alta de Persona</h2>
  <form method="post" action="">
    <div class="row">
      <div class="col l6 offset-l2">
        <h5>Datos Personales</h5>  
      </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="row">
      <div class="col l4 offset-l2 input-field">
        <input id="apellido" name="apellido" type="text" class="validate" required>
        <label for="apellido">Apellido</label>
      </div>
      <div class="col l4 input-field">
        <input id="nombre" name="nombre" type="text" class="validate" required>
        <label for="nombre">Nombre</label>
      </div>
    </div>
    <div class="row">
      <div class="col l4 offset-l2 input-field">
        <input type="date" name="fecha_nacimiento" required>
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
      </div>
      <div class="col l4 input-field">
        <select id="genero" name="genero" required>
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
        <input id="domicilio" name="domicilio" type="text" class="validate" required>
        <label for="domicilio">Domicilio</label>
      </div>
      <div class="col l4 input-field">
        <input id="email" name="email" type="email" class="validate" required="">
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
        <select id="organismo" name="organismo" required>
          <option value="" disabled selected>Seleccionar organismo</option>
          <option value="1">Organismo 1</option>
          <option value="2">Organismo 2</option>
        </select>
        <label>Organismo</label>
      </div>
    </div>
    <div class="row">
      <div class="col l8 offset-l2">
        <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
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