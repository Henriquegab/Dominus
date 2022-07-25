<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cardapio;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardapioRequest;
use App\Http\Requests\UpdateCardapioRequest;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCardapioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardapioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function show(Cardapio $cardapio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function edit(Cardapio $cardapio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardapioRequest  $request
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardapioRequest $request, Cardapio $cardapio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cardapio  $cardapio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cardapio $cardapio)
    {
        //
    }
}
