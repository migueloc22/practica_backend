<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimento;

class EstablecimientoController extends Controller
{
    public function store(Request $request)
    {
        $mensaje ="Create success";
        $codigo=201;        
        try {
            // return Departamento::create($request->all());    
            //SELECT `id`, `nombre`, `lat`, `lng`, `telefono`, `correo`, `estado`, `fk_idUser` FROM `establecimentos` WHERE 1
            $establecimineto = new Establecimento;
            $establecimineto->$nombre = $request->$nombre;
            $establecimineto->$lat = $request->$lat;
            $establecimineto->$lng = $request->$lng;
            $establecimineto->$telefono = $request->$telefono;
            $establecimineto->$correo = $request->$correo;
            $establecimineto->$estado = $request->$estado;
            $establecimineto->$fk_idUser = $request->$fk_idUser;
            $establecimineto->save();
        } catch (Exception $e) {
            $mensaje = "Error es "+ $e;
            $codigo=500; 
        }
        
        

        // return response()->json($flight, 201);
        return response()->json( [
            'message' => $mensaje
        ]               , $codigo);
       
    }
}
