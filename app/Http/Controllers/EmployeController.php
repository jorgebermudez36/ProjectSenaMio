<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employe;

class EmployeController extends Controller
{
    
    public function load(Request $request)
    {
        $employe = new employe;
 
        $employe->dniE = $request->id;
        $employe->nameE = $request->nombre;
        $employe->surnameE = $request->apellido;
        $employe->addres = $request->direccion;
        $employe->email = $request->correo;
        $employe->phone = $request->telefono;
        $employe->cargo_id = $request->cargo;
        $employe->save();
    }
public function update(Request $request)
    {
        $employe = employe::find($request->id);
 
        $employe->dniE = $request->dni;
        $employe->nameE = $request->nombre;
        $employe->surnameE = $request->apellido;
        $employe->addres = $request->direccion;
        $employe->email = $request->correo;
        $employe->phone = $request->telefono;
        $employe->cargo_id = $request->cargo;
        $employe->save();
    }

}
