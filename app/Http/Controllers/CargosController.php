<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cargos;

class CargosController extends Controller
{
    public function index()
    {
        $cargos = cargos::all();
        $array = array(
            'status'=>200,
            'msj'=>'datos actualizados'
        );
        return [
            'data'=> $cargos,
            ];
    }

     public function select()
    {
        $cargos = cargos::select('id', 'cargo')->get();
        return ['data'=> $cargos];
    }          
    

    public function load(Request $request)
    {
        $cargo = new cargos;
 
        $cargo->cargo = $request->cargo;
        $cargo->descripcion = $request->desc;
        $cargo->save();
    }

     public function update(Request $request)
    {
        $cargo = cargos::find($request->id);
 
        $cargo->cargo = $request->cargo;
        $cargo->descripcion = $request->desc;
        $cargo->save();
    }

    public function delete(Request $request)
    {
        $cargo = cargos::find($request->id);
        $cargo->delete();
    }
}
