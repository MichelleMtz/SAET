<?php

namespace App\Http\Controllers;

use App\AsignarTutor;
use Illuminate\Http\Request;

class AsignarTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Jefe.Asignar');
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
     * @param  \App\AsignarTutor  $asignarTutor
     * @return \Illuminate\Http\Response
     */
    public function show(AsignarTutor $asignarTutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsignarTutor  $asignarTutor
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignarTutor $asignarTutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsignarTutor  $asignarTutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignarTutor $asignarTutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsignarTutor  $asignarTutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignarTutor $asignarTutor)
    {
        //
    }
}
