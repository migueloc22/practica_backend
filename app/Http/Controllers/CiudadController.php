<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\ciudad;
class CiudadController extends Controller
{
    public function index()
    {
        $mensaje ="OK";
        $codigo=200;        
        $data;
        try {
            // return ciudad::create($request->all());
            // $ciudad = new ciudad;
            // $ciudad->ciudad = $request->ciudad;
            // $ciudad->save();

            // $data = ciudad::select('ciudad.ciudad', 'ciudad.id','departamento.departamento')
            //     ->leftjoin('departamento', 'ciudad.fk_id_departamento', '=', 'departamento.id')
            //     ->get();
            $data = app('db')->select("SELECT * FROM ciudads");   
        } catch (Exception $e) {
            $mensaje = "Error en la consulta es: "+ $e;
            $codigo=500; 
        }
        
        

        // return response()->json($flight, 201);
        return response()->json( [
            'message' => $mensaje,
            'codigo' => $codigo,
            'data'  =>  $data
        ]               , $codigo);
    }
    public function ciudades($id)
    {
        $mensaje ="OK";
        $codigo=200;        
        $data;
        try {
            // return ciudad::create($request->all());
            // $ciudad = new ciudad;
            // $ciudad->ciudad = $request->ciudad;
            // $ciudad->save();

            $data = ciudad::select('ciudads.name', 'ciudads.id')
                ->where('ciudads.fk_id_departamento',$id)
                ->get();
        } catch (Exception $e) {
            $mensaje = "Error en la consulta es: "+ $e;
            $codigo=500; 
        }
        
        

        // return response()->json($flight, 201);
        return response()->json( [
            'message' => $mensaje,
            'codigo' => $codigo,
            'data'  =>  $data
        ]               , $codigo);
    }
}
