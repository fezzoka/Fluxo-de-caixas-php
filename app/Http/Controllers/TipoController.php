<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::orderBy('tipo');
        return view('tipo.index')->with(compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = null;
        return view('tipo.form')->with(compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->fill($request->all());
        $tipo->save();
        return redirect()->route('tipo.index')->whith('success','Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $tipo = Tipo::find($id);
        return view('tipo.show')
        ->with(compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $tipo = Tipo::find($id);
        return view('tipo.form')->with(compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $tipo = tipo::find($id);
        $tipo->fill($request->all());
        $tipo->save();
        return redirect()->route('tipo.index')->whith('success','Cadastrado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $tipo = tipo::find($id);
        $tipo->delete();
        $tipo->save();
        return redirect()->route('tipo.index')->whith('danger','excluido com Sucesso');
    }
}
