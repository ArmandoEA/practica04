<?php

namespace App\Http\Controllers;

use App\Bolsos;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\BolsoRequest;

class BolsosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bolsos = DB::table('bolsos')->get();
        $bolsos = Bolsos::orderBy('id','ASC')->paginate(5);
        return view('bolsos.index')->with('bolsos',$bolsos);
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
    public function store(BolsoRequest $request)
    {
        //Bolsos::create($request->all());
        $bolso = new Bolsos;

        $bolso->name = $request->name;
        $bolso->description = $request->description;
        $bolso->price = $request->price;
        $bolso->photo = $request->photo;

        $bolso->save();

        return redirect()->route('bolsos.index')->with('info', 'El producto se guardó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function show(Bolsos $bolso)
    {
        return view('bolsos.show')->with('bolsos', $bolso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function edit(Bolsos $bolso)
    {
        return view('bolsos.edit')->with('bolsos', $bolso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function update(BolsoRequest $request, Bolsos $bolso)
    {
        //Bolsos::update($request->all());
        $bolso->name = $request->name;
        $bolso->description = $request->description;
        $bolso->price = $request->price;
        $bolso->photo = $request->photo;

        $bolso->save();

        return redirect()->route('bolsos.index')->with('info', 'El producto se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bolsos  $bolsos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bolsos $bolso)
    {
      $bolso->delete();
      return back()->with('info', 'El registro se eliminó correctamente');
    }
}
