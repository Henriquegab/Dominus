<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cardapio;
use App\Models\Prato;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $redes_sociais = RedeSocial::firstOrCreate();
        $cardapio = Cardapio::all()->last();
        $pratos = ($cardapio != null) ? Prato::where('cardapio_id', $cardapio->id)->get() : [];
        return view('web.home.index', \compact('redes_sociais', 'pratos'));
    }
}
