<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSolitacao_pedido_venda extends Model
{
    protected $table='solicitacao_envio_venda';
    protected $fillable=['pedido_id','qtd','story_id','product_id','data_saida'];
    public function relPedidoVenda()
    {
        return $this->hasone('App\Http\Models\ModelpedidoVenda','id','pedido_id');
    }
    public function relStory()
    {
        return $this->hasone('App\Http\Models\ModelStory','id','story_id');
    }
}
