<?php

namespace App\Http\Controllers;

use App\Antecedentes;
use Illuminate\Http\Request;

class AntecedentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("Alumnos.AntecedentesA");
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
     * @param  \App\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antecedentes $antecedentes)
    {
        //
    }
}
