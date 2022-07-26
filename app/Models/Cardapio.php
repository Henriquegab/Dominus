<?php

namespace App\Models;

use App\Models\Prato;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    public function prato(){

        return $this->belongsTo(Prato::class);

    }
}
