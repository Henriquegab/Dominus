<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class RedesSociais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rede_social = RedeSocial::firstOrCreate();

        return view('admin.redes-sociais.create', \compact('rede_social'));
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
            'ifood' => ['required', 'string'],
            'telefone' => ['required', 'string'],
            'whatsapp' => ['required', 'string'],
        ]);

        $rede_social = RedeSocial::firstOrFail();
        $rede_social->update($dados);

        return redirect()->route('admin.redes-sociais.index');
    }
}
