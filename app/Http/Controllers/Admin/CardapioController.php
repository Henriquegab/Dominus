<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cardapio;
use App\Models\Prato;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardapioRequest;
use App\Http\Requests\UpdateCardapioRequest;
use Illuminate\Http\Request;

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
        return view('admin.cardapios.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2(Request $request)
    {


        $quantidade = $request->quantidade;


        return view('admin.cardapios.create2', ['quantidade' => $quantidade]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardapioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $quantidade)
    {


        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'nome' => 'required|gte:3|lte:60',
        //     'conteudo' => 'required|lte:255|gte:3'
        // ]);

        // dd($request['imagem']);

            // dd($request->all());

        $cardapio = Cardapio::create();


            for($i=0; $i < $quantidade; $i++){
                $data = [];


                if ($request->imagem[$i]) {
                    $imagem_urn = $request->imagem[$i]->store('public\images');
                    $data['imagem'] = substr($imagem_urn, 14);

                    $data['nome'] = $request->nome[$i];
                    $data['conteudo'] = $request->conteudo[$i];
                    $data['cardapio_id'] = $cardapio->id;
                }



                Prato::create($data);


            }












        return redirect()->route('cardapio.create');
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
