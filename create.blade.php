@extends ('layout.app')

@section('title')
Proyecto laravel
@endsection

@section('content')
<div class="container"><!--container-->
  <div class="container p-3 my-3 bg-dark text-white">
  <div class="container p-3 my-3 bg-dark text-white">
  <h2>"AGREGAR DATOS A LA TABLA"</h2>
</div>
  </div>
<!-- FORMULARIO -->
<div class="container p-3 my-3 bg-dark text-white">
<form class="form-inline" method="POST" action="{{ url('registros') }}" >
@csrf

<div class="container p-3 my-3 bg-dark text-white">
    <div class="row">

    <div class="col text-center">
    <label for="text">NOMBRE:</label>
    <input type="text" class="form-control" id="inputEmail3" name="nombre" placeholder="Escribe el nombre">
    </div>
 
    <div class="col text-center">
    <label for="text">A.PATERNO:</label>
      <input type="text" class="form-control" id="inputPassword3" name="ap" placeholder="Escribe el ap">
    </div>

    <div class="col text-center">
    <label for="text">A.MATERNO:</label>
      <input type="text" class="form-control" id="inputPassword3" name="am" placeholder="Escribe el am">
    </div>
</div>
</div>
</div>

<div class="container p-3 my-3 bg-dark text-white">
<div class="row">

<div class="col">
    <label for="text">DESCRIPCION:</label>
    <input type="text" class="form-control" id="inputPassword3" name="descripcion" placeholder="Describe al alumno">
    </div>

    <div class="col text-center">
    <label for="text">CIUDAD:</label>
      <input type="text" class="form-control" id="inputPassword3" name="ciudad" placeholder="Escribe la ciudad">
    </div>

    <div class="col text-center">
    <label for="text">GRUPO:</label>
      <input type="text" class="form-control" id="inputPassword3" name="grupo" placeholder="Escribe el grupo">
    </div>

</div>
</div>

<div class="container p-3 my-3 bg-dark text-white">
<div class="row">

<div class="col text-center">
<label for="email" class="mr-sm-2">CORREO INSTITUCIONAL:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Escribe tu correo" id="email" name="email">
</div>

<div class="col text-center">
  <label for="pwd" class="mr-sm-2">CONTRASEÑA:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Escribe tu contraseña" id="pwd" name="contraseña">
</div>


<div class="col-md-12 text-center">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> RECORDAR CONTRASEÑA
    </label>
  </div>

</div>
</div>

<div class="card-footer card bg-secondary text-white">
    <div class="col">
      <button type="submit" class="btn btn-success">AGREGAR <i class="fa fa-plus-circle"></i></button>
      <a href="{{ route('registros.index') }}" class="btn btn-danger">CANCELAR <i class="fa fa-times-circle"></i></a>
    </div>
    </div>
    </form>
<!-- FORMULARIO -->

  </div><!--container-->
</section>
<br>

@endsection