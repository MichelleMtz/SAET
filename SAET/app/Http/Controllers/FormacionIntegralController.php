<?php

namespace App\Http\Controllers;

use App\FormacionIntegral;
use Illuminate\Http\Request;

class FormacionIntegralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Alumnos.FormacionIntegral');
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
     * @param  \App\FormacionIntegral  $formacionIntegral
     * @return \Illuminate\Http\Response
     */
    public function show(FormacionIntegral $formacionIntegral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormacionIntegral  $formacionIntegral
     * @return \Illuminate\Http\Response
     */
    public function edit(FormacionIntegral $formacionIntegral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormacionIntegral  $formacionIntegral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormacionIntegral $formacionIntegral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormacionIntegral  $formacionIntegral
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormacionIntegral $formacionIntegral)
    {
        //
    }
}
