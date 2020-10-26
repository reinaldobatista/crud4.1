<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBanco extends Model
{
    protected $table='banco';
    protected $fillable=['name','conta','Nbanco'];
    public function search($filter1,$filter2,$filter3,$filter4)
    {
        $results=$this->where(function($query) use($filter1,$filter2,$filter3,$filter4){
                if ($filter1)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('conta','LIKE',"%{$filter3}%");
                    $query->where('Nbanco','LIKE',"%{$filter4}%");
                }
                if ($filter2)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('conta','LIKE',"%{$filter3}%");
                    $query->where('Nbanco','LIKE',"%{$filter4}%");
                }
                if ($filter3)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('conta','LIKE',"%{$filter3}%");
                    $query->where('Nbanco','LIKE',"%{$filter4}%");
                }
                if ($filter4)
                {
                    $query->where('id','LIKE',"%{$filter1}%");
                    $query->where('name','LIKE',"%{$filter2}%");
                    $query->where('conta','LIKE',"%{$filter3}%");
                    $query->where('Nbanco','LIKE',"%{$filter4}%");
                }
        })->paginate();
        return $results;

    }
    public function relCaixa()
    {
        return $this->hasmany('App\Http\Models\ModelCaixa','banco_id');
    }
}
