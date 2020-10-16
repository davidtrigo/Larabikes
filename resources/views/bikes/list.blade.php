<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
        <title>{{config('app.name')}} - LISTADO DE MOTOS </title>
        
        <!-- CSS Bootstrap y Laravel -->
         	<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   </head>       
  <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="{{url('img/welcome.jpg')}}" width="50" height="30" class="d-inline-block align-top" alt="LARABIKES">
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
        <h2>Listado de motos</h2>
        
        @if(Session::has('success'))
        <div class ="alert alert-success"> 
        	{{Session::get('success')}}
        </div>
       @endif
 
 <!--paginado  -->
	<div class="row">
		<div class="col-6 text-left">{{$bikes->links()}}</div>
    	<div class="col-6 text-right">
    		<p>Nueva moto <a href="{{route('bikes.create')}}" class= "btn btn-success ml-2">+</a></p>
    	</div>
	</div>
       
    <table class="table table-striped table-bordered">
        <thead>
         <tr>
    		  <th scope="col">ID</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Operaciones</th>
      	</tr>
     	</thead>
     	<tbody>
      @foreach($bikes as $bike)    
    <tr>
        <td>{{$bike ->id}}</td>
        <td>{{$bike ->marca}}</td>
        <td>{{$bike ->modelo}}</td>
         
         <td class ="text-center">
        	<a href="{{route('bikes.show',$bike->id)}}">
        	<img height="20" width="20" src="{{asset('/img/buttons/show.svg')}}" alt="Ver detalles" title="Ver detalles">
        	</a>
        	<a href="{{route('bikes.edit',$bike->id)}}">
        	<img height="20" width="20" src="{{asset('/img/buttons/edit.svg')}}" alt="Modificar" title="Modificar">
        	</a>
        	<a href="{{route('bikes.delete',$bike->id)}}">
        	<img height="20" width="20" src="{{asset('/img/buttons/delete.svg')}}" alt="Borrar" title="Borrar">
        	</a>
         </td>
    </tr>
      @endforeach
    <tr><td colspan="4">Mostrando {{sizeof($bikes)}} de {{$total}}</td></tr>
     	</tbody>
     </table>
    
    
     <footer class="footer mt-auto py-3">
          <div class="container">
            <span class="text-muted">Aplicación creada por 
            	<a href="https://davidtrigo.com" target="blank"><b>David Trigo</b></a> en el curso de Laravel</span>
          </div>
    </footer>   
    </body>
</html>
