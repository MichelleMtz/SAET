<?php

namespace App\Http\Controllers;

use App\Tutorados;
use Illuminate\Http\Request;

class TutoradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Tutor.Tutorados');
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
     * @param  \App\Tutorados  $tutorados
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorados $tutorados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutorados  $tutorados
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorados $tutorados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutorados  $tutorados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorados $tutorados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutorados  $tutorados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorados $tutorados)
    {
        //
    }
}
