<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
        <title>{{config('app.name')}} - PORTADA </title>
        
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
        <h1 class ="my-2">Bienvenido a Larabikes</h1>
        <p> Ejemplo de <b>CRUD</b> con el framework Laravel</p>
        <!-- 
         <button type="button" class="btn btn-dark">
     		Total de motos guardadas <span class="badge badge-light">0</span>
         </button>
         --> 
       <!--   <p>Se ha implementado un <b>CRUD</b> con motos<p> -->
        <div class = "row mt-2 mb-3 col-10 offset-1 ">
        	<img class="d-dblock w-100" src="{{url('public/img/welcome.jpg')}}" alt="Larabikes" >
        </div>
     
         <footer class="page-footer font-small p-4 bg-dark">
              <div class="container">
                <span class="text-muted">Aplicación creada por 
                	<a href="https://davidtrigo.com" target="blank"><b>David Trigo</b></a> en el curso de Laravel</span>
              </div>
        </footer>   
     </body>
</html>
