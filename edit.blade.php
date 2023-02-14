@extends ('layout.app')

@section('title')
Proyecto laravel
@endsection

@section('content')
<div class="container"><!--container-->
  <div class="container p-3 my-3 bg-dark text-white">
  <div class="container p-3 my-3 bg-dark text-white">
  <h2>"ACTUALIZAR DATOS A LA TABLA"</h2>
</div>
  </div>
<div class="container p-3 my-3 bg-dark text-white">
 <form method="POST" class="form-inline" action="{{ route ('registros.update', $registroNew->id) }}">
 @csrf
 @method('put')
  <div class="container p-3 my-3 bg-dark text-white">
    <div class="row">

    <div class="col text-center">
    <label for="text">NOMBRE:</label>
    <input type="text" class="form-control" name="nombre" value="{{$registroNew->nombre}}">
    </div>

    <div class="col text-center">
    <label for="text">A.PATERNO:</label>
    <input type="text" class="form-control" name="ap" value="{{$registroNew->ap}}">
    </div>
    
    <div class="col text-center">
    <label for="text" >A.MATERNO:</label>
    <input type="text" class="form-control" name="am" value="{{$registroNew->am}}">
    </div>

    </div>
    </div>
    </div>

    <div class="container p-3 my-3 bg-dark text-white">
    <div class="row">
    
    <div class="col">
    <label for="text">DESCRIPCION:</label>
    <input type="text" class="form-control" name="descripcion" value="{{$registroNew->descripcion}}">
    </div>

    <div class="col">
    <label for="text" >CIUDAD:</label>
    <input type="text" class="form-control" name="ciudad" value="{{$registroNew->ciudad}}">
    </div>

    <div class="col">
    <label for="text" >GRUPO:</label>
    <input type="text" class="form-control" name="grupo" value="{{$registroNew->grupo}}">
    </div>

    </div>
    </div>
    

    <div class="container p-3 my-3 bg-dark text-white">
    <div class="row">

    <div class="col text-center">
<label for="email" class="mr-sm-2">CORREO INSTITUCIONAL:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="email" value="{{$registroNew->email}}">
</div>

<div class="col text-center">
  <label for="pwd" class="mr-sm-2">CONTRASEÑA:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="contraseña" value="{{$registroNew->contraseña}}">
</div>
</div>
</div>
   
    <div class="card-footer  card bg-secondary text-white">
    <div class="col">
      <button type="submit" class="btn btn-info">ACTUALIZAR <i class="fa fa-check-circle"></i>
      </button>
      <a href="{{ route('registros.index') }}" class="btn btn-danger">CANCELAR <i class="fa fa-times-circle"></i></a>
     </a>
    </div>
    </div>
    </form>
    <br>
    @endsection