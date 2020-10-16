<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
        <title>{{config('app.name')}} - EDITAR MOTO </title>
        
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
     <h2>Actualización de la moto {{"$bike->marca $bike->modelo"}}</h2>
 <!--    @if ( $errors->any())
        
        		@foreach( $errors->all() as $error)
        			{{ $error }}
        		@endforeach
  			
        @endif-->
     @if ( $errors->any())
    	<div class = "alert alert-danger">
        	<ul>
        		@foreach( $errors->all() as $error)
        			<li>{{ $error }}</li>
        		@endforeach
        	 </ul>
        </div>
        @endif
        
          @if(Session::has('success'))
        <div class ="alert alert-success"> 
        	{{Session::get('success')}}
        </div>
       @endif  
        
   <form class ="my-2 border p-5" method="POST" action ="{{route('bikes.update',$bike->id)}}">
   {{csrf_field()}}
   <input name="_method" type="hidden" value="PUT">
   
  	<div class="form-group  row">
        <label for="inputMarca" class="col-sm-2 col-form-Label">Marca</label>
        <input name="marca" type="text" class="up form-control col-sm-10" 
        id="inputMarca" placeholder="Marca"
        	   maxlength="255" required="required" value="{{$bike->marca}}">
    </div>
   
    <div class="form-group  row">
        <label for="inputModelo" class="col-sm-2 col-form-Label">Modelo</label>
        <input name="modelo"  type="text" class="up form-control col-sm-10" 
        id="inputModelo" placeholder="Modelo"
        	   maxlength="255" required="required" value="{{$bike->modelo}}"  >
    </div>
    <div class="form-group  row">
       	<label for="inputPrecio" class="col-sm-2 col-form-Label">Precio</label>
       	<input name="precio"   type="number" maxlength="11" class="up form-control col-sm-4" 
       	id="inputPrecio" placeholder="precio"
   			 	 required="required" min="0" value="{{$bike->precio}}" ">
    </div>
    	
	<div class="form-group  row">
       	<label for="inputkms" class="col-sm-2 col-form-Label">Kilómetros</label>
       	<input name="kms" type="number" class="up form-control col-sm-4" id="inputkms" placeholder="kms"
		 	 required="required"  value="{{$bike->kms}}"">
	</div>
	
    <div class="form-group  row">
       	<input name="matriculada" value="1" class="form-check-input" 
       			type="checkbox" {{$bike->matriculada ?"checked":""}}>    
       	<label for="matriculada" class="form-check-Label">Matriculada</label>
	</div>  
	
	<div class="form-group  row">
       <button type="submit" class="btn btn-success mx-2">Guardar</button>
       <button type="reset" class="btn btn-secondary">Restablecer</button>
	</div>
   </form>
       	
    	<div class="text-center my-3">
    		<a href ="{{url('/')}}"  class="btn btn-dark mr-2">Inicio</a>
    		<a href ="{{route('bikes.index')}}" class="btn btn-dark">Listado</a>
    	</div>
    	 
      
       <footer class="page-footer font-small p-4 bg-dark">
              <div class="container">
                <span class="text-muted">Aplicación creada por 
                	<a href="https://davidtrigo.com" target="blank"><b>David Trigo</b></a> en el curso de Laravel</span>
              </div>
        </footer>   
     </body>
</html>
