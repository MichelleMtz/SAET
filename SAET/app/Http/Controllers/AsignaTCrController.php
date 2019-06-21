<?php

namespace App\Http\Controllers;

use App\AsignaTC;
use Illuminate\Http\Request;

class AsignaTCrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Jefe/TutorCoor');
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
     * @param  \App\AsignaTC  $asignaTC
     * @return \Illuminate\Http\Response
     */
    public function show(AsignaTC $asignaTC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsignaTC  $asignaTC
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignaTC $asignaTC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsignaTC  $asignaTC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignaTC $asignaTC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsignaTC  $asignaTC
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignaTC $asignaTC)
    {
        //
    }
}
