<?php

namespace App\Http\Controllers;

use App\EnderecoEntrega;
use App\Http\Requests\EnderecoEntregaRequest;
use Illuminate\Http\Request;

class EnderecoEntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EnderecoEntrega::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnderecoEntregaRequest $request)
    {
        $dataForm = $request->all();
        $createEnderecoEntrega = EnderecoEntrega::create($dataForm);

        return $createEnderecoEntrega;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enderecoEntrega = EnderecoEntrega::find($id);
        $enderecoEntrega->load('cliente');

        return $enderecoEntrega;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function update(EnderecoEntregaRequest $request, $id)
    {
        $dataForm = $request->all();
        $updateEnderecoEntrega = EnderecoEntrega::update($dataForm, $id);

        return $updateEnderecoEntrega;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnderecoEntrega  $enderecoEntrega
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return EnderecoEntrega::destroy($id);
    }
}
