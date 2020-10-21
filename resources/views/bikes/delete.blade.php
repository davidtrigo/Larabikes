<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
        <title>{{config('app.name')}} - BORRADO DE LA MOTO </title>
        
        <!-- CSS Bootstrap y Laravel -->
      		 <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   </head>      
  <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="{{url('public/img/welcome.jpg')}}" width="50" height="30" class="d-inline-block align-top" alt="LARABIKES">
       <b> LARABIKES MOTOSPORT</b>
      </a>
    </nav>     
     <body class="container p-3">
    <!--Botonera superior -->
        <ul class="nav nav-pills my-3">
            <li class="nav nav-pills mr-3">
    			<a class=" btn btn-primary nav-link active" href ="{{url('/')}}">Inicio</a>
            </li>
             <li class="nav nav-pills mr-3">
    			<a class=" btn btn-primary nav-link active" href ="{{route('bikes.index')}}">Garaje</a>
            </li>
             <li class="nav nav-pills mr-3">
    				<a class=" btn btn-primary nav-link active" href ="{{route('bikes.create')}}">Nueva moto</a>
            </li>
        </ul>
     <!-- PARTE CENTRAL --> 
     <h1 class="my-2">Gestor de motos Larabikes</h1>
     <h2>Borrado de la moto {{"$bike->marca $bike->modelo"}}</h2>
     
        <form class ="my-2 border p-5" method="POST" action ="{{route('bikes.destroy',$bike->id)}}">
   {{csrf_field()}}
       <input name="_method" type="hidden" value="DELETE">
        <label for="confirmedelete"> Confirmar el borrado de {{"$bike->marca $bike->modelo"}}:</label>
      
   <input type="submit" alt="Borrar" title="Borrar" class="btn btn-danger" value="Borrar" id="confirmdelete">
   
   
   
   
   
    </form>
  	<div class="btn-group" role="group" aria-label="Links">
       		<a class=" btn btn-primary mr-2" href ="{{url('/')}}">Inicio</a>
       		<a class=" btn btn-primary mr-2" href ="{{route('bikes.index')}}">Garaje</a>
       		<a class=" btn btn-primary mr-2" href ="{{route('bikes.show',$bike->id)}}">Regresar a detalles de la moto</a>
       	
    </div> 
	
  <br>      
  
	
      
       <footer class="page-footer font-small p-4 bg-light">
              <div class="container">
                <span class="text-muted">Aplicación creada por 
                	<a href="https://davidtrigo.com" target="blank"><b>David Trigo</b></a> en el curso de Laravel</span>
              </div>
        </footer>   
     </body>
</html>
