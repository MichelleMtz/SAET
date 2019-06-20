<?php

namespace App\Http\Controllers;

use App\MenuCoordinador;
use Illuminate\Http\Request;

class MenuCoordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('CoordinadorG.menuCG');
    }

}