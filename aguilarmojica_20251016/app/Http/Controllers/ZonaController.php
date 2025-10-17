<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZonaController extends Controller
{
    //
    public function obtenerZonas(){

        $zona = new Zona();
        $valores = $Zona::all();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el EndPoint",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta,200);
    }

    public function obtenerZona(){
        $Zona = new Zona();
        $valores = $Zona->where('id_departamento',$idzona)->get();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el EndPoint",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta,200);
    }
}
