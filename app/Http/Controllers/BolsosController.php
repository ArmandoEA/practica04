<?php

namespace App\Http\Controllers;

use App\Bolsos;
use Illuminate\Http\Request;
use DB;

class BolsosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bolos = DB::table('bolsos')->get();
        return view('bolsos.index')->with('bolsos',$bolos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bolsos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bolsos::create($request->all());
        return view('bolsos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function show(Bolsos $bolsos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function edit(Bolsos $bolsos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bolsos $bolsos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bolsos $bolsos)
    {
        //
    }
}
