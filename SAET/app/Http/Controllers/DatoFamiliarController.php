<?php

namespace App\Http\Controllers;

use App\DatoFamiliar;
use Illuminate\Http\Request;

class DatoFamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Alumnos.DatosFamiliares');
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
     * @param  \App\DatoFamiliar  $datoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function show(DatoFamiliar $datoFamiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatoFamiliar  $datoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(DatoFamiliar $datoFamiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatoFamiliar  $datoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatoFamiliar $datoFamiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatoFamiliar  $datoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatoFamiliar $datoFamiliar)
    {
        //
    }
}
