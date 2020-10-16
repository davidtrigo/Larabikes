<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //recupera las motos con paginación (10 por página)
        $bikes=Bike::orderBy('id','DESC')->paginate(10);
    
        //recupera el total de motos en la BBDD (para mostrarlo en la vista)
        $total=Bike::count();
        
        //retorna la vista con la lista de motos
        //a la vista se le pasan los elementos que deben mostrar en un array
        return view('bikes.list',['bikes'=>$bikes,'total'=>$total]);
        
    }

    /**
     * Muestra un formulario para la creación de una nueva moto
     */
    public function create()
    {   //carga la vista con el formulario para añadir una moto
        return view('bikes.create');
    }

    /**
     * Guarda una nueva moto.
     */
    public function store(Request $request)
    {
       $request->validate([
           'marca'=>'required|max:32',
           'modelo'=>'required|max:32',
           'precio'=>'required|numeric',
           'kms'=>'required|integer',
           'matriculada'=>'sometimes'
       ]);
       $bike=Bike::create($request->all()); //guardado en la BDD

      //redirrección a los detalles de la moto creada
       return redirect()->route('bikes.show',$bike->id)
       ->with('success',"Moto $bike->marca $bike->modelo añidida sastifactoriamente");
    }

    /**
     * Muestra una moto pasando su id por parametro.
     */
    public function show($id)
    {
        //recupera la moto con el id deseado. Si falla, se generará un error 404
        $bike=Bike::findOrFail($id);

        //carga la vista correspondiente y le pasa la moto
        return view('bikes.show',['bike'=>$bike]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //recupera la moto con el id deseado. Si falla, se generará un error 404
        $bike=Bike::findOrFail($id);
        
        //carga la vista correspondiente y le pasa la moto
        return view('bikes.update',['bike'=>$bike]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validación de datos
        $request->validate([
            'marca'=>'required|max:32',
            'modelo'=>'required|max:32',
            'precio'=>'required|numeric',
            'kms'=>'required|integer',
            'matriculada'=>'sometimes'
        ]);
            Bike::findOrFail($id)->update($request->all()+['matriculada'=>0]);//guardado en la BDD
            //carga la misma vista y muestra el mensaje de éxito
            return back()->with('success','Moto actualizada');
            //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //recupera la moto a eliminar con el id deseado. Si falla, se generará un error 404
        $bike=Bike::findOrFail($id);
        
        //muestra la vista de confirmación de la eliminación
        return view('bikes.delete',['bike'=>$bike]);
    }
    
    /**Remove the specified resorce from storage**/
    
    public function destroy($id) {
        //Busca la moto seleccionada y la borra
       $bike=  Bike::findOrFail($id);
        
        //la borra de la base de datos
        $bike->delete();

        //redirige a la lista de motos
         return redirect('bikes')->with('success',"Moto $bike->marca $bike->modelo eliminada");
        
    }
    
 
}
