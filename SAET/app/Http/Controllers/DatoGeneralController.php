<?php

namespace App\Http\Controllers;

use App\DatoGeneral;
use Illuminate\Http\Request;

class DatoGeneralController extends Controller
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
     * @param  \App\DatoGeneral  $datoGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(DatoGeneral $datoGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatoGeneral  $datoGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(DatoGeneral $datoGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatoGeneral  $datoGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatoGeneral $datoGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatoGeneral  $datoGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatoGeneral $datoGeneral)
    {
        //
    }
}
