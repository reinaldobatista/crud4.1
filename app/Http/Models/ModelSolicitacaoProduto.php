<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSolicitacaoProduto extends Model
{
    protected $table='solicitacao_produtos';
    protected $fillable=['pedido_id','qtd'];
    public function relPedidoVenda()
    {
        return $this->hasone('App\Http\Models\ModelpedidoVenda','id','pedido_id');
    }
}
