<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Prato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $cardapio = Cardapio::all()->last();

        if($cardapio != null){
            $pratos = Prato::where('cardapio_id', $cardapio->id);
            return view('web.home.index', ['pratos' => $pratos->get()]);
        }

        else{
            return view('web.home.index');
        }


        // dd($pratos->get());


    }
}
