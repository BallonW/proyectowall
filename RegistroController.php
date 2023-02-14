<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = registro::paginate(2);
        return view('registros.index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroNew=new registro();
        $registroNew->id = $request->id;
        $registroNew->nombre = $request->nombre;
        $registroNew->ap = $request->ap;
        $registroNew->am = $request->am;
        $registroNew->descripcion = $request->descripcion;
        $registroNew->ciudad = $request->ciudad;
        $registroNew->grupo = $request->grupo;
        $registroNew->email = $request->email;
        $registroNew->contraseña = $request->contraseña;
        $registroNew->save();
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroNew=registro::find($id);
        return view('registros.show', compact('registroNew'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $registroNew=registro::find($id);
        return view('registros.edit', compact('registroNew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registroNew=registro::find($id);
        $registroNew->update($request->all());
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registroNew=registro::find($id);
        $registroNew->delete();
        return redirect()->route('registros.index');
    }
}
