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
        <img src="{{url('img/welcome.jpg')}}" width="50" height="30" class="d-inline-block align-top" alt="LARABIKES">
       <b> LARABIKES MOTOSPORT</b>
      </a>
    </nav>     
           
       
    <body class="container p-3">
   
     <!-- PARTE CENTRAL --> 
    
        <div class = "row mt-2 mb-3 col-10 offset-1 ">
        	<img class="d-dblock w-100" src="{{url('img/404.png')}}" alt="Error404" >
        	  <h1>Error <b>404</b> PÁGINA NO ENCONTRADA</h1>
        </div>
        <div class="btn-group" role="group" aria-label="Links">
       		<a class=" btn btn-primary mr-2" href ="{{url('/')}}">Inicio</a>
       		<a class=" btn btn-primary mr-2" href ="{{route('bikes.index')}}">Garaje</a>
       	</div>  
     
         <footer class="page-footer font-small p-4 bg-dark">
              <div class="container">
                <span class="text-muted">Aplicación creada por 
                	<a href="https://davidtrigo.com" target="blank"><b>David Trigo</b></a> en el curso de Laravel</span>
              </div>
        </footer>   
     </body>
</html>
