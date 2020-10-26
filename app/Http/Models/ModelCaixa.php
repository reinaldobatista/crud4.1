<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCaixa extends Model
{
    protected $table='caixa';
    protected $fillable=['name','banco_id','value'];
    public function search($filter1,$filter2,$filter3)
    {
        $results=$this->where(function($query) use($filter1,$filter2,$filter3){
                if ($filter1)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('banco_id','LIKE',"%{$filter3}%");
                }
                if ($filter2)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('banco_id','LIKE',"%{$filter3}%");
                }
                if ($filter3)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('banco_id','LIKE',"%{$filter3}%");
                }
        })->paginate();
        return $results;

    }
    public function relBanco()
    {
        return $this->hasone('App\Http\Models\ModelBanco','id','banco_id');
    }
}
