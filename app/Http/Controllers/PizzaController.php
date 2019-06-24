<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Http\Requests\PizzaFormRequest;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pizza::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaFormRequest $request)
    {
        $dataForm = $request->all();
        $createPizza = Pizza::create($dataForm);

        return $createPizza;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::find($id);
        $tamanhoPizza = new Pizza();
        $tamanhoPizza->getTamanhoPizza();

        return ['pizza' => $pizza, 'tamanhoPizza' => $tamanhoPizza];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $updatePizza = Pizza::update($dataForm, $id);

        return $updatePizza;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Pizza::destroy($id);
    }
}
