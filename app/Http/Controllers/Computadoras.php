<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class Computadoras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Inicio";
        $items = Computadora::all();
        return view('inicio', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Agregar computadora";
        return view('anadir', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Computadora();
        $item->nombre = $request->nombre;
        $item->marca = $request->marca;
        $item->modelo = $request->modelo;
        $item->ram = $request->ram;
        $item->procesador = $request->procesador;
        $item->hdd = $request->hdd;
        $item->descripcion = $request->descripcion;
        $item->url = $request->url;
        $item->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar";
        $items = Computadora::find($id);
        return view("eliminar", compact('titulo','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = "Actualizar equipo de computo";
        $items = Computadora::find($id);
        return view('actualizar',compact('titulo','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Computadora::find($id);
        $item->nombre = $request->nombre;
        $item->marca = $request->marca;
        $item->modelo = $request->modelo;
        $item->ram = $request->ram;
        $item->procesador = $request->procesador;
        $item->hdd = $request->hdd;
        $item->descripcion = $request->descripcion;
        $item->url = $request->url;
        $item->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Computadora::find($id);
        $item->delete();
        return redirect('/');
    }
}
