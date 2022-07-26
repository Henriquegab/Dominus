<?php

namespace App\Models;
use App\Models\Cardapio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'conteudo', 'imagem', 'cardapio_id'];

    public function Cardapio(){

        return $this->hasOne(Cardapio::class);


    }
}
