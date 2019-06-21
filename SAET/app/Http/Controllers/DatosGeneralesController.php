<?php

namespace App\Http\Controllers;

use App\DatosGenerales;
use Illuminate\Http\Request;

class DatosGeneralesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Alumnos.DatosGenerales');

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
     * @param  \App\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function show(DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosGenerales $datosGenerales)
    {
        //
    }
}
