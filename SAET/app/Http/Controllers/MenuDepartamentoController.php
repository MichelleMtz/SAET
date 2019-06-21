<?php

namespace App\Http\Controllers;

use App\MenuDepartamento;
use Illuminate\Http\Request;

class MenuDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Departamento.menuD');
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
     * @param  \App\MenuDepartamento  $menuDepartamento
     * @return \Illuminate\Http\Response
     */
    public function show(MenuDepartamento $menuDepartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuDepartamento  $menuDepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuDepartamento $menuDepartamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuDepartamento  $menuDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuDepartamento $menuDepartamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuDepartamento  $menuDepartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuDepartamento $menuDepartamento)
    {
        //
    }
}
