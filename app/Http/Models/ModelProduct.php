<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table='product';
    protected $fillable=['name','category_id','description','price','image'];
    public static function towns($id){
    	return ModelProduct::where('category_id','=',$id)
    	->get();
    }
    public function search($filter,$filter1,$filter2,$filter3)
    {
        $results=$this->where(function($query) use($filter,$filter1,$filter2,$filter3){
            date_default_timezone_set('America/Sao_Paulo');
            $data_atual=date('Y-m-d H:i:s');
                if ($filter)
                {
                    if($filter2==null)
                    {
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                    else
                    {
                        $$query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                        $query->whereBetween('created_at', array($filter2, $filter3))->get();
                    }
                }
                if ($filter1)
                {
                    
                    if($filter2==null)
                    {
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                    else
                    {
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                        $query->whereBetween('created_at', array($filter2, $filter3))->get();
                    }
                }
                if ($filter2)
                {
                    if($filter3==null)
                    {
                        $query->whereBetween('created_at', array($filter2,$data_atual))->get();
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                    else
                    {
                        $query->whereBetween('created_at', array($filter2, $filter3))->get();
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                }
                if ($filter3)
                {
                    if($filter2==null)
                    {
                        $query->whereBetween('created_at', array('2000-01-01 00:00:00', $filter3))->get();
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                    else
                    {
                        $query->whereBetween('created_at', array($filter2, $filter3))->get();
                        $query->where('name','LIKE',"%{$filter}%");
                        $query->where('category_id','LIKE',"%{$filter1}%");
                    }
                }
        })->paginate();
        return $results;

    }
    public function search1($filter)
    {
        $results=$this->where(function($query) use($filter){
                if ($filter)
                {
                    $query->where('name','LIKE',"%{$filter}%");
                }
        })->paginate();
        return $results;

    }
    public function relcarrinho()
    {
        return $this->hasmany('App\Http\Models\Carrinho','products_car_id');
    }
    public function relpedidovenda()
    {
        return $this->hasmany('App\Http\Models\pedidoVenda','products_id');
    }
    public function relDeposito()
    {
        return $this->hasmany('App\Http\Models\ModelDeposito','products_id');
    }
    public function relCategory()
    {
        return $this->hasone('App\Http\Models\ModelCategory','id','category_id');
    }
}