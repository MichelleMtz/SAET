<?php

namespace App\Http\Controllers;

use App\AlumnoD;
use Illuminate\Http\Request;

class AlumnoDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("Departamento.Alumno.Alumno");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlumnoD  $alumnoD
     * @return \Illuminate\Http\Response
     */
    public function show(AlumnoD $alumnoD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AlumnoD  $alumnoD
     * @return \Illuminate\Http\Response
     */
    public function edit(AlumnoD $alumnoD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlumnoD  $alumnoD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlumnoD $alumnoD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlumnoD  $alumnoD
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlumnoD $alumnoD)
    {
        //
    }
}
