<?php

namespace App\Http\Controllers;

use App\BuscarTC;
use Illuminate\Http\Request;

class BuscarTCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("Departamento.Tutor.BusquedaTC");
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
     * @param  \App\BuscarTC  $buscarTC
     * @return \Illuminate\Http\Response
     */
    public function show(BuscarTC $buscarTC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuscarTC  $buscarTC
     * @return \Illuminate\Http\Response
     */
    public function edit(BuscarTC $buscarTC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuscarTC  $buscarTC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuscarTC $buscarTC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuscarTC  $buscarTC
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuscarTC $buscarTC)
    {
        //
    }
}
