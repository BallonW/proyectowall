<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>LARAVEL</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <script src="jquery/jquery-3.3.1.js"></script> 
    <script src="js/bootstrap.js"></script>  

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    
    <title>@yield('title')</title>

    <style>
.piee2{
  color: #fff;
  background-color:#383637;
  margin-bottom: 1px;
}
.piee{
  color: #fff;
  background-color:#383637;
  margin-bottom: 1px;
}

article {
  padding: 15px;
  width: 71%;
  background-color:#483B44;
  height: auto; 
}

</style>

  </head>
  <body style="background-color:#312F2F;">

  {{--mandamos a llamar el header--}}
  @include('layout.header')

  <div class="content">
    {{--mandamos a llamar el contenido de la pagina solicitada--}}
    @yield('content')

</div>

{{--mandamos a llamar el footer--}}
  @include('layout.footer')


  </body>  
</html>