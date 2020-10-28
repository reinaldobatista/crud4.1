<?php

namespace App\Http\Controllers;

use App\Http\Models\ModelCarrinho;
use App\Http\Models\ModelCategory;
use App\Http\Models\ModelDeposito;
use App\Http\Models\ModelpedidoVenda;
use App\Http\Models\ModelPedidoVenda_status;
use App\Http\Models\ModelProduct;
use App\Http\Models\ModelSolicitacaoProduto;
use App\Http\Models\ModelSolitacao_pedido_venda;
use App\Http\Models\ModelStory;
use App\Http\Requests\DepositoRequest;
use App\User;
use Illuminate\Http\Request;

class DepositoController extends Controller
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
        $storys=$this->objStory->all();
        $depositos= ModelDeposito::paginate();
        return view('ajax.deposito.visualizarDeposito', [
            'depositos'=>$depositos,
            'storys'=>$storys,
        ]);
    }
    public function indexSolicitacoesEnvioVenda()
    {
        $storys=$this->objStory->all();
        $pedidoVenda= $this->objPedidovenda->all();
        $solicitacao_pedido_venda= $this->objSolicitaca_pedido_venda->all();
        return view('ajax.pedidoVenda.envio_pedido_venda.visualizarSolicitacoes_envio', [
            'pedidoVenda'=>$pedidoVenda,
            'storys'=>$storys,
            'solicitacao_pedido_venda'=>$solicitacao_pedido_venda,
        ]);
    }
    public function EnvioPedido($id)
    {
        $user=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $storys=$this->objStory->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $status=$this->objStatusPedidoVenda->all();
        $pedidoVendas=$this->objPedidovenda->all();
        $solicitacao_pedido_venda= $this->objSolicitaca_pedido_venda->all();
        $pedido=$this->repositorypedidoVenda->find($id);
        $pedido=$pedido->getattributes();
        if( $pedido['status_pedido_venda_id']==1)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda ainda Não foi pago!' ); 
        }
        if( $pedido['status_pedido_venda_id']==6)
        {
            return redirect()->back()->with( 'error', 'Ja foi feito o envio desse pedido!' ); 
        }
        if( $pedido['status_pedido_venda_id']==4)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda Cancelado!' ); 
        }
        if( $pedido['status_pedido_venda_id']==5)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda ja foi finalizado!' ); 
        }
        return view('ajax.pedidoVenda.envio_pedido_venda.EnviaVendasOnline', [
            'pedidoVendas'=>$pedidoVendas,
            'storys'=>$storys,
            'solicitacao_pedido_venda'=>$solicitacao_pedido_venda,
            'products'=>$products,
            'storys'=>$storys,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'pedidoId'=>$id,
            'user'=>$user,
            'status' =>$status,           
            'pedidoVendas'=>$pedidoVendas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depositos=$this->objDeposito->all();
       
        $categorys= $this->objCategory->all();
        
        $storys= $this->objStory->all();
        
        $products=$this->objProduct->all();
       
        return view('ajax.deposito.adicaoEstoque',[
            'depositos'=>$depositos,
            'products'=>$products,
            'categorys'=>$categorys,
            'storys'=>$storys,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepositoRequest $request)
    {
        $data= $request->only('story_id','products_id','qtd','category_id');
        $this->repositorydeposito->updateOrCreate(['products_id'=>$data['products_id'],'story_id'=>$data['story_id']],$data);
        return redirect( route( 'index.deposito' ) )->with( 'success', 'Produto adicionado ao deposito com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function FilterSelect(Request $request, $id)
    {
        if($request->ajax()){
            $product=$this->repository->find($id);
            $towns[]=$this->repositorycategory->find($product->category_id);
            }
            return response()->json($towns);
    }
    public function FilterSelectStory(Request $request, $id)
    {
        $products=$this->objProduct->all();
        $depositos=$this->objDeposito->all();
        $existe=0;
        $ok=0;
        if($request->ajax()){
            $story=$this->repositorystory->find($id);
            foreach ($depositos as $key => $deposito) {
               if($deposito->story_id==$story->id)
               {
                    $deposito_storys[]=$deposito;
                    $ok=1;
               }
            }
            if($ok==0)
            {
                foreach ($products as $key => $product) {
                    $towns[]=$product;
                }
            }
            else
            {
                foreach ($deposito_storys as $key => $deposito_story) {
                    foreach ($products as $key => $product) {
                       if($product->id==$deposito_story->products_id)
                       {
                            $products_id[]=$product->id;
                       }
                    }
                }
                foreach ($products as $key => $product) {
                    foreach ($products_id as $key => $product_id) {
                        if($product->id==$product_id)
                        {
                            $existe=1;
                        }
                    }
                    if($existe==1)
                    {
                        $existe=0;
                    }
                    else
                    {
                        $towns[]=$product;
                       
                    }
                }
                }
        }
           
            return response()->json($towns);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        if(!$deposito= $this->repositorydeposito->find($id))
        return redirect()->back();

      return view('ajax.deposito.editDepositoProduto',compact('deposito'));
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
        if(!$deposito=  $this->repositorydeposito->find($id))
        return redirect()->back();

        $data=$request->all();
        $deposito->update($data);
        return redirect(route('index.deposito'))->with( 'success', 'Editado com sucesso!' );
    }
    public function updateEnvio(Request $request, $id)
    {
        $pedido=$this->repositorypedidoVenda->find($id);
        $pedido=$pedido->getattributes();
        if( $pedido['status_pedido_venda_id']==1)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda ainda Não foi pago!' ); 
        }
        if( $pedido['status_pedido_venda_id']==6)
        {
            return redirect()->back()->with( 'error', 'Ja foi feito o envio desse pedido!' ); 
        }
        if( $pedido['status_pedido_venda_id']==4)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda Cancelado!' ); 
        }
        if( $pedido['status_pedido_venda_id']==5)
        {
            return redirect()->back()->with( 'error', 'Pedido de venda ja foi finalizado!' ); 
        }
        $request=$request->all();
        $pedido_venda_ids=$request['pedido_venda_id'];
        date_default_timezone_set('America/Sao_Paulo');
        $data_atual=date('Y-m-d');
        $data=[
            'solicitacao_envio'=>$data_atual,
            'status_pedido_venda_id'=>6,

        ];
        foreach ($pedido_venda_ids as $key => $item) {
            $pedidoVenda=$this->objPedidovenda->find($item);
            $pedidoVenda->update($data);
        }
        return redirect(route('indexSolicitacoesEnvioVenda.vendasonline'))->with( 'success', 'Produto Pronto para Envio!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deposito=  $this->repositorydeposito->where('id',$id)->first();
        if(!$deposito)
        {
            return redirect()->back();
        }
        try {
            $deposito->delete();
            return redirect(route('index.deposito'))->with('success','Deposito deletado com sucesso');
        } catch (\Throwable $th) {
           if($th->getCode()==23000)
           {
            return redirect()->back()->with('error','Existe algum cadastro com esse Produto no deposito');
           }
            throw $th;
        }
    }
    public function search(Request $request)
    {
        $filters=$request->except('_token');
        $storys= ModelStory::paginate(1000);
        $depositos= ModelDeposito::paginate(1000);
        $depositos=$this->repositorydeposito->search($request->filter,$request->filter1);

      return view('ajax.deposito.visualizarDeposito', [
        'storys'=>$storys,
        'depositos'=>$depositos,
        'filters'=>$filters,
        ]);
    }
}
