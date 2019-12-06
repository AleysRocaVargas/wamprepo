<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\acudientes;
use App\modelos\usuarios;

class AcudientesController extends Controller
{
    //
    public function index(){

        return response()->json([
            "acudientes" => acudientes::all()
        ]);
    }

    public function store(Request $request){

        $acudiente = acudientes::create([
            "EMAIL" => $request->input('email'),
            "ACUDIENTE_DE" => $request->input('usuario')
        ]);

        return response()->json([
            'acudientes' => $acudiente
        ]);
    }

    public function acudientes(Request $request){
        $acudientes  = acudientes::where("ACUDIENTE_DE", $request->input('usuario'))->get();
        
        return response()->json([
            'acudientes' => $acudientes
        ]);
    }

}
