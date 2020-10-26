<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMovimentacao_caixa extends Model
{
    protected $table='movimentacaocaixa';
    protected $fillable=['caixa_id','value','cliente_id'];
}
