<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "funcionando";
        
        //
        return response()->json([
            "usuarios" => Usuarios::all()
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuario = Usuarios::create([
            "NOMBRE" => $request->input('nombre'),
            "EMAIL" => $request->input('email'),
            "PASSWORD" => md5($request->input('password'))
        ]);

        return response()->json([
            'usuarios' => $usuario
        ]);
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function iniciarSesion(Request $request)
    {
        //
        $usuario = Usuarios::where('EMAIL', $request->input('email'))
            ->where("PASSWORD", md5($request->input('password')))->first();

        return response()->json([
            'usuarios' => $usuario
        ]);
    }
}
