<?php

namespace App\Http\Controllers;

use App\Http\Models\ModelCarrinho;
use App\Http\Models\ModelCategory;
use App\Http\Models\ModelDeposito;
use App\Http\Models\ModelpedidoVenda;
use App\Http\Models\ModelProduct;
use App\Http\Models\ModelSolicitacaoProduto;
use App\Http\Models\ModelPedidoVenda_status;
use App\Http\Models\ModelSolitacao_pedido_venda;
use App\Http\Models\ModelStory;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PedidoVendaController extends Controller
{
    private $objUser;
    private $repository;
    private $repositoryuser;
    private $repositorycategory;
    private $repositorystory;
    private $repositorycarrinho;
    private $repositorydeposito;
    private $repositorypedidoVenda;
    private $repositorySolicitacaoProduto;
    private $repositoryStatusPedidoVenda;
    private $repositorySolicitacao_pedido_venda;
    private $objProduct;
    private $objCategory;
    private $objDeposito;
    private $objStory;
    private $objPedidovenda;
    private $objCarrinho;
    private $objSolicitacaoProduto;
    private $objStatusPedidoVenda;
    private $objSolicitaca_pedido_venda;
    protected $request;
    public function __construct(Request $request, ModelProduct $product,User $user, 
    ModelCategory $category,ModelStory $story,ModelCarrinho $carrinho,
    ModelDeposito $deposito,ModelpedidoVenda $pedidoVenda,ModelSolicitacaoProduto $solicitacaoProduto,
    ModelPedidoVenda_status $status_pedido_venda,ModelSolitacao_pedido_venda $solicitacao_pedido_venda)
    {
        $this->repository=$product;
        $this->repositoryuser=$user;
        $this->repositorycarrinho=$carrinho;
        $this->repositorystory=$story;
        $this->repositorycategory=$category;
        $this->repositorystory=$story;
        $this->repositorydeposito=$deposito;
        $this->repositorypedidoVenda=$pedidoVenda;
        $this->repositorySolicitacaoProduto=$solicitacaoProduto;
        $this->repositoryStatusPedidoVenda=$status_pedido_venda;
        $this->repositorySolicitacao_pedido_venda=$solicitacao_pedido_venda;
        $this->objUser=new User();
        $this->objProduct=new ModelProduct();
        $this->objCategory=new ModelCategory();
        $this->objStory=new ModelStory();
        $this->objCarrinho=new ModelCarrinho();
        $this->objPedidovenda=new ModelpedidoVenda();
        $this->objDeposito=new ModelDeposito();
        $this->objSolicitacaoProduto=new ModelSolicitacaoProduto();
        $this->objStatusPedidoVenda=new ModelPedidoVenda_status();
        $this->objSolicitaca_pedido_venda=new ModelSolitacao_pedido_venda();
       $this->middleware('auth'); //coloca autenticação em tudo

      /* $this->middleware('auth')->only([
            'create','store'
       ]);*///coloca autenticação nas selecionadas

       //$this->middleware('auth')->except('index'); coloca autenticação em todas exceto as selecionadas
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $status=$this->objStatusPedidoVenda->all();
        $pedidoVendas=$this->objPedidovenda->all();
        return view('ajax.pedidoVenda.visualizarVendasOnline', [
            'products'=>$products,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'users'=>$users,
            'pedidoVendas'=>$pedidoVendas,
            'status'=>$status,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function returnteste($data)
    {
        $total=0;
        $pedidos= $this->objPedidovenda->where('numberPedido',$data[0])->get();
        $pedidos=$pedidos->all();
        foreach ($pedidos as $key => $item) {
            $products[]=$this->objProduct->where('id',$item->products_id)->get()->all();
            $total=$item->value*$item->qtd+$total;
        }
        $result=[$pedidos,$products,$total];
        return response()->json($result);

    }
    public function edit($number)
    {
        $user=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $storys=$this->objStory->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $pedidoVendas=$this->objPedidovenda->all();
        foreach ($pedidoVendas as $key => $pedido) {
            if($pedido->numberPedido==$number)
            {
                if($pedido->status_pedido_venda_id==1)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda ainda Não foi pago!' );  
                }
                if($pedido->status_pedido_venda_id==3)
                {
                    return redirect()->back()->with( 'error', 'Ja foi feita requisição desse pedido!' );
                }
                if($pedido->status_pedido_venda_id==4)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda Cancelado!');
                }
                if($pedido->status_pedido_venda_id==5)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda ja foi finalizado!' ); 
                }
            }
        }
        return view('ajax.pedidoVenda.editVendasOnline', [
            'products'=>$products,
            'storys'=>$storys,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'user'=>$user,
            'number'=>$number,
            'pedidoVendas'=>$pedidoVendas,
            ]);
    }
    public function Finish($number)
    {
        $user=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $storys=$this->objStory->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $status=$this->objStatusPedidoVenda->all();
        $pedidoVendas=$this->objPedidovenda->all();
        foreach ($pedidoVendas as $key => $pedido) {
            if($pedido->numberPedido==$number)
            {
                if($pedido->status_pedido_venda_id==1)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda ainda Não foi pago!' );  
                }
                if($pedido->status_pedido_venda_id==4)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda Cancelado!');
                }
                if($pedido->status_pedido_venda_id==5)
                {
                    return redirect()->back()->with( 'error', 'Pedido de venda ja foi finalizado!' ); 
                }
            }
        }
        return view('ajax.pedidoVenda.FinishVendasOnline', [
            'products'=>$products,
            'storys'=>$storys,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'user'=>$user,
            'number'=>$number,
            'status' =>$status,           
            'pedidoVendas'=>$pedidoVendas,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request=$request->all();
        $solicitacaoProdutos=$this->objSolicitacaoProduto->all();
        $requestnames=$request['products_id'];
        $requeststorys=$request['story_id'];
        $requestqtds=$request['qtd'];
        $qtd=0;$contloop=0;
        $requestpedidoids=$request['pedido_venda_id'];
        $count=count($requeststorys);
        for ($i=0; $i < $count; $i++) { 
           $confere=$this->objDeposito->where('story_id',$requeststorys[$i])->where('products_id',$requestnames[$i])->get();
            if($confere->count()==0)
            {
                $product=$this->objProduct->find($requestnames[$i]);
                return redirect()->back()->with( 'error', "O produto $product->name não existe no estoque!");
            }
           foreach ($confere as $key => $item) {
            $depositoid=$item->id;
            $qtd=$item->qtd+$qtd;
            }
            $depositoids[]= $depositoid;
            if($qtd<$requestqtds[$i])
            {
                $product=$this->objProduct->find($requestnames[$i]);
                return redirect()->back()->with( 'error', "O produto  $product->name não tem quantidade disponivel no estoque!" );
            }
        }
        foreach ($depositoids as $key => $depositoId) {
            if($depositoId=$this->repositorydeposito->find($depositoId))
            {
                $depositoi=$depositoId->getattributes();
                $data=[
                    'qtd'=>$depositoi['qtd']-$requestqtds[$contloop],
                    ];
                date_default_timezone_set('America/Sao_Paulo');
                $data_atual=date('Y-m-d');
                $dataSolicitacao=[
                    'story_id'=> $depositoi['story_id'],
                    'product_id'=> $depositoi['products_id'],
                    'qtd'=>$requestqtds[$contloop],
                    'pedido_id'=> $requestpedidoids[0],
                    'data_saida'=> $data_atual,
                    ];    
                $this->repositorySolicitacao_pedido_venda->create($dataSolicitacao);
                $depositoId->update($data);
                $contloop++;
            }
        }
        foreach ($requestpedidoids as $key => $requestpedidoid) {
            if($requestpedidoid=$this->repositorypedidoVenda->find($requestpedidoid))
            {
                $requestpedidoi=$requestpedidoid->getattributes();
                date_default_timezone_set('America/Sao_Paulo');
                $data_atual=date('Y-m-d');
                $data=[
                    "status_pedido_venda_id" => 3,
                    "solicitacao_envio" =>$data_atual,
                    ];
                    $requestpedidoid->update($data);
            }
            foreach ($solicitacaoProdutos as $key => $solicitacaoProduto) {
                if($solicitacaoProduto->pedido_id ==$requestpedidoid->id  )
                {
                    $solicitacaoProduto->delete();
                }
            }
        }
        return redirect(route('index.vendasonline'))->with( 'success', 'Pedido pronto para envio' );
    }
    // public function update(Request $request, $id)
    // {

    //     $request=$request->all();
    //     $solicitacaoProdutos=$this->objSolicitacaoProduto->all();
    //     $qtd=0;$qtdstory=0;$qtdQtd=0;$qtdproduct=0;
    //     $ok=0; $okstory=0; $okproduc=0; $okQtd=0; $qtdver=0; $ultimostory=0;
    //     $depositos=  $this->repositorydeposito->all();
    //     $requestnames=$request['products_id'];
    //     $requeststorys=$request['story_id'];
    //     $requestqtds=$request['qtd'];
    //     $requestpedidoids=$request['pedido_venda_id'];
    //     $count=count($requeststorys);
    //     for ($i=0; $i < $count; $i++) { 
    //         $confere=$this->objDeposito->where('story_id',$requeststorys[$i])->where('products_id',$requestnames[$i])->get();
    //         if($confere->count()==0)
    //         {
    //             return redirect()->back()->with( 'error', 'Não existe esté produto no estoque!' );
    //         }
    //         foreach ($confere as $key => $item) {
    //             $qtd=$item->qtd+$qtd;
    //         }
    //         if($qtd<$requestqtds[$i])
    //         {
    //             return redirect()->back()->with( 'error', 'Algum dos produtos não tem quantidade disponivel no estoque!' );
    //         }
    //      }
    //     foreach ($requestpedidoids as $key => $requestpedidoid) {
    //         $requestpedidoid=$this->repositorypedidoVenda->find($requestpedidoid);
    //         $requestpedidoi=$requestpedidoid->getattributes();
    //         if( $requestpedidoi['status_pedido_venda_id']==1)
    //         {
    //             return redirect()->back()->with( 'error', 'Pedido de venda ainda Não foi pago!' ); 
    //         }
    //         if( $requestpedidoi['status_pedido_venda_id']==3)
    //         {
    //             return redirect()->back()->with( 'error', 'Ja foi feita requisição desse pedido para o deposito!' ); 
    //         }
    //         if( $requestpedidoi['status_pedido_venda_id']==4)
    //         {
    //             return redirect()->back()->with( 'error', 'Pedido de venda Cancelado!' ); 
    //         }
    //         if( $requestpedidoi['status_pedido_venda_id']==5)
    //         {
    //             return redirect()->back()->with( 'error', 'Pedido de venda ja foi finalizado!' ); 
    //         }
    //         if($requestpedidoi['status_pedido_venda_id']==2)
    //         {
    //             $ok=1;
    //         }
            
    //     }
    //     if($ok==1)
    //     {
    //         foreach ($requeststorys as $key => $requeststory) {
    //             if($ultimostory==$requeststory)
    //             {
    
    //             }
    //             else
    //             {
    //                 $qtdstory=$qtdstory+1;
    //                 $ultimostory=$requeststory;
    //             }
                   
    //         }
    //         $ultimostory=0;
    //         foreach ($requestqtds as $key => $requestqtd) {
    //                 $qtdQtd=$qtdQtd+1;
    //                 $qtdQ[]=$requestqtd;
    //         }
    //         foreach ($requestnames as $key => $requestname) {
    //             $qtdproduct=$qtdproduct+1;
    //             $products[]=$requestname;
    //         }
    
    //         foreach ($depositos as $key => $deposito) {
    //             $deposito=$deposito->getattributes();
    //            foreach ($requeststorys as $key => $requeststory) {
    //                 if($requeststory==$deposito['story_id'])
    //                 {
    //                         foreach ($products as $key => $product) {
    //                             if($product==$deposito['products_id'])
    //                             {
    //                                 $okstory++;
    //                                 $depositoids[]=$deposito['id'];
    //                             }
    //                            }
                       
    //                 }
                   
    //            }
    //         }
    //         foreach ($depositoids as $key => $depositoid) {
    //            if($depositoid==$ultimostory)
    //            {
                    
    //            }
    //            else
    //            {
    //                $depositoIds[]=$depositoid;
    //                $ultimostory=$depositoid;
    //            }
    //         }
    //         if($okstory>=$qtdstory)
    //         {
    //             foreach ($depositoIds as $key => $depositoId) {
    //                 if($depositoId=$this->repositorydeposito->find($depositoId))
    //                 {   
    //                     $depositoid=$depositoId->getattributes();
    //                     foreach ($requestnames as $key => $requestname) {
    //                         if($depositoid['products_id']==$requestname)
    //                         {
    //                             $okproduc=$okproduc+1;
    //                         }
    //                     }
                     
    //                 }
    //             }
    //         } 
    //         else
    //         {
    //             return redirect()->back()->with( 'error', 'Não existe nenhum produto nesse deposito!' ); 
    //         }
    //         if($okproduc>=$qtdproduct)
    //         {
    //             foreach ($requestqtds as $key => $requestqtd) {
    //                 if($qtdQ[$qtdver]>=$requestqtd)
    //                 {
    //                     $okQtd++;
    //                 }
    //                 $qtdver=$qtdver+1;
    //             }
    //             $qtdver=0;
    //         }
    //         else
    //         {
    //             return redirect()->back()->with( 'error', 'Não existe esté produto nesse deposito!' ); 
    //         }
    //         if($okQtd>=$qtdQtd)
    //         {
    //             foreach ($depositoIds as $key => $depositoId) {
    //                 if($depositoId=$this->repositorydeposito->find($depositoId))
    //                 {
    //                     $depositoi=$depositoId->getattributes();
    //                     $data=[
    //                         'story_id'=> $depositoi['story_id'],
    //                         'products_id'=> $depositoi['products_id'],
    //                         'qtd'=>$depositoi['qtd']-$qtdQ[$qtdver],
    //                         'category_id'=> $depositoi['category_id'],
    //                         ];
    //                     date_default_timezone_set('America/Sao_Paulo');
    //                     $data_atual=date('Y-m-d');
    //                     $dataSolicitacao=[
    //                         'story_id'=> $depositoi['story_id'],
    //                         'product_id'=> $depositoi['products_id'],
    //                         'qtd'=>$qtdQ[$qtdver],
    //                         'pedido_id'=> $requestpedidoids[0],
    //                         'data_saida'=> $data_atual,
    //                         ];    
    //                     $this->repositorySolicitacao_pedido_venda->create($dataSolicitacao);
    //                     $depositoId->update($data);
    //                     $qtdver=$qtdver+1;
    //                 }
    //             }
    //             foreach ($requestpedidoids as $key => $requestpedidoid) {
    //                 if($requestpedidoid=$this->repositorypedidoVenda->find($requestpedidoid))
    //                 {
    //                     $requestpedidoi=$requestpedidoid->getattributes();
    //                     date_default_timezone_set('America/Sao_Paulo');
    //                     $data_atual=date('Y-m-d');
    //                     $data=[
    //                         "products_id" => $requestpedidoi['products_id'],
    //                         "numberPedido" => $requestpedidoi['numberPedido'],
    //                         "status_carrinho_id" =>$requestpedidoi['status_carrinho_id'],
    //                         "qtd" => $requestpedidoi['qtd'],
    //                         "value" => $requestpedidoi['value'],
    //                         "user_id" =>$requestpedidoi['user_id'],
    //                         "status_pedido_venda_id" => 3,
    //                         "solicitacao_envio" =>$data_atual,
    //                         ];
    //                         $requestpedidoid->update($data);
    //                 }
    //                 foreach ($solicitacaoProdutos as $key => $solicitacaoProduto) {
    //                     if($solicitacaoProduto->pedido_id ==$requestpedidoid->id  )
    //                     {
    //                         $solicitacaoProduto->delete();
    //                     }
    //                 }
    //             }
    //         }
    //         else
    //         {
    //             return redirect()->back()->with( 'error', 'Alguns desses produtos nao tem quantidade disponivel
    //              no estoque verifique os produtos no deposito!' ); 
    //         }
    //         return redirect(route('index.vendasonline'))->with( 'success', 'Pedido pronto para envio' );
    //     }
        
    // }
    public function updateFinish(Request $request, $id)
    {

        $request=$request->all();
        date_default_timezone_set('America/Sao_Paulo');
        $data_atual=date('Y-m-d');
        $data=[
            'status_pedido_venda_id'=>$request['statusPedido'],
            'data_finalizacao'=>$data_atual,
            'observ_finilazacao'=>$request['observacoes'],
        ];
        $pedidoVendas=$this->objPedidovenda->all();
        foreach ($pedidoVendas as $key => $pedidoVenda) {
            if($pedidoVenda->numberPedido==$request['numberPedido'])
            {
                $pedidoVenda->update($data);
            }
        }
        return redirect(route('index.vendasonline'))->with('success', 'Pedido Finalizado' );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
        $filters=$request->except('_token');
        $users=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $pedidoVendas=$this->objPedidovenda->all();
        if($request->filter2==null)
        {

        }
        else
        {
            $request->filter2=array($request->filter2." 00:00:00");
            $request->filter2=$request->filter2[0];
        }
        if($request->filter3==null)
        {

        }
        else
        {
            $request->filter3=array($request->filter3." 23:59:59");
            $request->filter3=$request->filter3[0];
        }
        $pedidoVendas=$this->repositorypedidoVenda->search($request->filter,$request->filter1,$request->filter2,$request->filter3);

      return view('ajax.pedidovenda.visualizarVendasOnline', [
        'users'=>$users,
        'filters'=>$filters,
        'carrinhos'=>$carrinhos,
        'categorys'=>$categorys,
        'selectcategory'=>$selectcategory,
        'products'=>$products,
        'pedidoVendas'=>$pedidoVendas,
        ]);
    }
}
