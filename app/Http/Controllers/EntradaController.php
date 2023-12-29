<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Personas;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index()
    {

        // 1061789552
        return view("entradas.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'tramite' => 'required',
            'unidad_administrativa' => 'required',
            'id_personas' => 'required',
        ]);
        $input = $request->all();

        $entrada = Entrada::create($input);
        $entradas = Entrada::where('id_personas', '=', $request->id_personas)->orderBy('created_at', 'desc')->get();
        return view('entradas.index', compact('entradas'));
    }

    public function getEntradas(Request $request)
    {
        $errorMessage = "";
        $identificacion = $request->identificacion;
        $persona = Personas::where('identificacion', '=', $identificacion)->first();
        $entradas = [];
        if ($persona) {
            $entradas = Entrada::where('id_personas', '=', $persona->id)->orderBy('created_at', 'desc')->get();
        } else {
            if($request->identificacion){
                $errorMessage = "La Persona no se encuentra registrada";
            }
        }
        return view("entradas.index", compact("entradas", "errorMessage", "persona"));
    }

}

