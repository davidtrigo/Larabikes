<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
        <title>{{config('app.name')}} - DETALLE DE LA MOTO </title>
        
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
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
	<div class="content">
        <h1 class="my-2">Gestor de motos Larabikes</h1>
        <h2>Detalles de la moto {{"$bike->marca $bike->modelo"}}</h2>
        @if(Session::has('success'))
            <div class ="alert alert-success"> 
            	{{Session::get('success')}}
            </div>
        @endif
       <table class="table table-striped table-bordered">
            <tr><td>ID</td><td>{{$bike ->id}}</td></tr>
            <tr><td>Marca</td><td>{{$bike ->marca}}</td></tr>
            <tr><td>Modelo</td><td>{{$bike ->modelo}}</td></tr>
            <tr><td>Precio</td><td>{{$bike ->precio}}</td></tr>
            <tr><td>Kms</td><td>{{$bike ->kms}}</td></tr>
            <tr>
            	<td>Matriculada</td>
            	<td>{{$bike->matriculada? 'SI':'NO'}}</td>
            <tr>
    	</table>    
       	<div class="text-right my-3">
       		<div class ="btn-group mx-2">
           		<a class="mx-2"  href ="{{route('bikes.edit',$bike->id)}}">
           		<img height="20" width="20" src="{{asset('public/img/buttons/edit.svg')}}" alt="Modificar" title="Modificar">
           		</a>
           		<a class="mx-2"  href ="{{route('bikes.delete',$bike->id)}}">
           		<img height="20" width="20" src="{{asset('public/img/buttons/delete.svg')}}" alt="Borrar" title="Borrar">
           		</a>
       		</div>
       	</div> 
       	<div class="btn-group" role="group" aria-label="Links">
       		<a class=" btn btn-primary mr-2" href ="{{url('/')}}">Inicio</a>
       		<a class=" btn btn-primary mr-2" href ="{{route('bikes.index')}}">Garaje</a>
       	</div>        
   </div>
        </div>
    </body>
</html>
