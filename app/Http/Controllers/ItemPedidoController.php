<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemPedidoRequest;
use App\ItemPedido;
use App\Pedido;
use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ItemPedido::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemPedidoRequest $request)
    {
        $dataForm = $request->all();
        $createItemPedido = ItemPedido::create($dataForm);

        return $createItemPedido;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemPedido = ItemPedido::find($id);
        $itemPedido->load('Pedido', 'Pizza');

        return $itemPedido;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function update(ItemPedidoRequest $request, $id)
    {
        $dataForm = $request->all();
        $updateItemPedido = ItemPedido::update($dataForm, $id);

        return $updateItemPedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ItemPedido::destroy($id);
    }
}
