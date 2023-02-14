@extends ('layout.app')

@section('title')
Proyecto laravel
@endsection

@section('content')

<section>

<div class="container">
  <div class="container p-3 my-3 bg-dark text-white">
   <h2>Control de Alumnos</h2>
<a href ="{{url('registros/create')}}" class="btn btn-success">AGREGAR <i class="fa fa-plus-circle"></i>
</a>
</div>

      <div class="container p-3 my-3 bg-dark text-white">
  <!-- Default panel contents -->
  <div class="card bg-secondary text-white">
    <div class="card-body text-center">TABLA ALUMNOS</div>
  </div>
  <br>
<div class="table-respossive">
  <!-- Table -->
  <table id="tabla" class="table table-dark">

   <thead>
 
      <tr class="">
      <td>Id</td>
      <td>Nombre</td>
      <td>A.Paterno </td>
     <td>A.Materno </td>
      <td>Modificar</td>
      <td>Borrar</td>
      <td>Consultar</td>
  </tr>

   </thead>
   @foreach ($alumno as $alumnos)
<tr>
<td>{{ $alumnos->id }}</td>
<td>{{ $alumnos->nombre }}</td>
<td>{{ $alumnos->ap}}</td>
<td>{{ $alumnos->am }}</td>
<td aling="" style="width:1px; white-space:nowrap;">
<a href="{{ route ('registros.edit', $alumnos->id) }}" class="btn btn-primary">MODIFICAR <i class="fa fa-pencil"></i>
     </a>
     
<td aling="" style="width:1px; white-space:nowrap;">
<form method="POST" class="form-inline" action="{{ route ('registros.destroy', $alumnos->id) }}">
@csrf
@method('delete')
<button class="btn btn-danger">BORRAR <i class="fa fa-trash-o"></i>
</button>
</form>
<td aling="" style="width:1px; white-space:nowrap;">
<a href="{{ route ('registros.show', $alumnos->id) }}" class="btn btn-secondary">CONSULTAL <i class="fa fa-search"></i>
     </a>
</tr>
@endforeach
</table>
<div class="card-body"> {{$alumno->links()}}</div>
<br>
</div>
<div class="card-footer text-center card bg-secondary text-white">FOOTER</div>
</div><!-- container  -->
</section>

@endsection