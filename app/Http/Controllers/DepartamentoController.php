<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
class DepartamentoController extends Controller
{
    public function index()
    {
        return Departamento::all();
    }

    public function show($id)
    {
        return Departamento::find($id);
    }

    public function store(Request $request)
    {
        $mensaje ="Create success";
        $codigo=201;        
        try {
            // return Departamento::create($request->all());
            $departamento = new Departamento;
            $departamento->departamento = $request->departamento;
            $departamento->save();
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
