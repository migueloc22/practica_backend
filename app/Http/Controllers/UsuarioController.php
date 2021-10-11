<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $mensaje ="OK";
        $codigo=201;        
        try {
            // return Departamento::create($request->all());
            $fecha =  $request->fecha_nac;
            $usuario = new User;
            $usuario->documento = $request->num_documento;
            $usuario->celular = $request->telefono;
            $usuario->name = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->correo;
            $usuario->genero = $request->genero;
            $usuario->dir = $request->dir;
           //$usuario->fecha_nac =  $fecha;
            $usuario->foto = 'predeterminado';
            $usuario->fk_id_ciudad = $request->ciudad;
            $usuario->remember_token =  str_random($length=50);
            //$usuario->fk_id_tpUser = $request->tipo_usuario;
            $usuario->fk_id_tpDoc = $request->tp_documento ;
            $usuario->password = Hash::make($request->contrasena);
            $usuario->save();
        } catch (Exception $e) {
            $mensaje = "Error es "+ $e;
            $codigo=501; 
        }
        
        

        // return response()->json($flight, 201);
        return response()->json( [
            'message' => $mensaje
        ]               , $codigo);
       
    }
}
