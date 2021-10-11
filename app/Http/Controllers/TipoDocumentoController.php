<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;
class TipoDocumentoController extends Controller
{
    public function index()
    {
        $mensaje ="OK";
        $codigo=200;        
        $data;
        try {
            $data = TipoDocumento::select('tipo_documentos.id', 'tipo_documentos.tp_documento')->get();
        } catch (Exception $e) {
            $mensaje = "Error en la consulta es: "+ $e;
            $codigo=500; 
        }
        return response()->json( [
            'message' => $mensaje,
            'data'  =>  $data
        ]               , $codigo);
    }
}
