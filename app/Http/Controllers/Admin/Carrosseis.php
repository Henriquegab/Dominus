<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrossel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Carrosseis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busca = $request->get('busca');
        $carrosseis = Carrossel::where('nome', 'like', "%{$busca}%")->get();

        return view('admin.carrosseis.index', \compact('busca', 'carrosseis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carrosseis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'min:3', 'string'],
            'descricao' => ['nullable', 'string'],
            'imagem' => ['image','mimes:jpeg,png,jpg,gif,svg'],
        ]);

        try {
            if(!empty($request->file('imagem'))) {
                $imagem = $request->file("imagem")->store('public/carrossel');
            }

            $dados['imagem'] = substr($imagem, 17);
            Carrossel::create($dados);
        } catch (\Exception $e){}

        return redirect()->route('admin.carrossel.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrossel $carrossel)
    {
        return view('admin.carrosseis.edit', \compact('carrossel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrossel $carrossel)
    {
        $dados = $request->validate([
            'nome' => ['required', 'min:3', 'string'],
            'descricao' => ['nullable', 'string'],
            'imagem' => ['image','mimes:jpeg,png,jpg,gif,svg'],
        ]);

        try {
            if(!empty($request->file('imagem'))) {
                if(Storage::exists($carrossel->imagem)) {
                    Storage::delete($carrossel->imagem);
                }

                $imagem = $request->file("imagem")->store('public/carrossel');
                $dados['imagem'] = !empty($imagem) ? str_replace('public', 'storage', substr($imagem, 17)) : '';
            }

            $carrossel->update($dados);
        } catch (\Exception $e){}

        return redirect()->route('admin.carrossel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrossel $carrossel)
    {
        if(Storage::exists($carrossel->imagem)) {
            Storage::delete($carrossel->imagem);
        }

        $carrossel->delete();

        return redirect()->route('admin.carrossel.index');
    }
}
