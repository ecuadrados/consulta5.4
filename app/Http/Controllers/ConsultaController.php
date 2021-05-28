<?php

namespace App\Http\Controllers;

use App\Centro_Vida;
use App\Nomina;
use App\Priorizado;
use App\Temporal;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                
        return view('consulta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = $request->documento;       
        // $fecha_nacimiento = $request->fecha_nacimiento;
        //$nomina = Nomina::where('documento',$documento)->where('fecha_nacimiento',$fecha_nacimiento)->get();
        $nomina = Nomina::where('documento',$documento)->get();
        $priorizado = Priorizado::where('documento',"$documento")->get();
        $temporal = Temporal::where('documento',$documento)->get();
        
        if(count($nomina) == 0 && count($priorizado) == 0 && count($temporal) == 0){
            return back()->with('mensaje', 'Usuario no se encuentra en base de datos');
        }
       
        return view('consulta.show', compact('nomina','priorizado','temporal'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
