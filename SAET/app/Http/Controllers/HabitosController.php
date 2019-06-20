<?php

namespace App\Http\Controllers;

use App\Habitos;
use Illuminate\Http\Request;

class HabitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("Alumnos.HabitosE");
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
     * @param  \App\Habitos  $habitos
     * @return \Illuminate\Http\Response
     */
    public function show(Habitos $habitos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Habitos  $habitos
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitos $habitos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habitos  $habitos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitos $habitos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Habitos  $habitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitos $habitos)
    {
        //
    }
}
