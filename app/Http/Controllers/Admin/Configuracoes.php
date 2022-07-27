<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Configuracoes extends Controller
{
    public function index()
    {
        $configuracao = Configuracao::get();
        return view('admin.configuracoes.index', \compact('configuracao'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'logo' => ['image','mimes:jpeg,png,jpg,gif,svg']
        ]);

        $configuracao = Configuracao::get();

        try {
            if(!empty($request->file('logo'))) {
                if(Storage::exists($configuracao->logo)) {
                    Storage::delete($configuracao->logo);
                }
                $extensao = $request->file('logo')->getClientOriginalExtension();
                $logo = $request->file("logo")->storeAs('public/template_images', 'logo.'.$extensao);
                $dados['logo'] = !empty($logo) ? str_replace('public', 'storage', $logo) : '';
            }

            $configuracao->update($dados);
        } catch (\Exception $e){
        }

        return redirect()->route('admin.configuracoes.index');
    }
}
