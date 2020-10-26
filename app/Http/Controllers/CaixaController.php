<?php

namespace App\Http\Controllers;

use App\Http\Models\ModelBanco;
use App\Http\Models\ModelCaixa;
use App\Http\Models\ModelCarrinho;
use App\Http\Models\ModelCategory;
use App\Http\Models\ModelDeposito;
use App\Http\Models\ModelLancamentoGerencial;
use App\Http\Models\ModelMovimentacao_caixa;
use App\Http\Models\ModelParcelas_lacamentogerencial;
use App\Http\Models\ModelpedidoVenda;
use App\Http\Models\ModelProduct;
use App\Http\Models\ModelStory;
use App\Http\Requests\CaixaRequest;
use App\Http\Requests\UpdateCaixaRequest;
use App\User;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
    private $objUser;
    private $repository,$repositoryuser,$repositorycategory,$repositorystory,$repositorycarrinho;
    private $repositorydeposito, $repositorypedidoVenda,$repositorylancamento,$repositoryparcela;
    private $objProduct,$objCategory,$objDeposito, $objStory,$objPedidovenda,$objCarrinho;
    private $repositorycaixa, $repositorybanco,$repositorycaixa_movimentacao;
    private $objLancamento, $objParcela, $objBanco, $objCaixa, $objMovimentacao_caixa;
    protected $request;
    public function __construct(Request $request, ModelProduct $product,User $user, ModelCategory $category,
    ModelStory $story,ModelCarrinho $carrinho,ModelDeposito $deposito, ModelParcelas_lacamentogerencial $parcela,
    ModelpedidoVenda $pedidoVenda, ModelLancamentoGerencial $lancamento, ModelBanco $banco, ModelCaixa $caixa,
    ModelMovimentacao_caixa $movimentacao_caixa)
    {
        $this->repository=$product;
        $this->repositoryuser=$user;
        $this->repositorycarrinho=$carrinho;
        $this->repositorystory=$story;
        $this->repositorycategory=$category;
        $this->repositorystory=$story;
        $this->repositorydeposito=$deposito;
        $this->repositorypedidoVenda=$pedidoVenda;
        $this->repositorylancamento=$lancamento;
        $this->repositoryparcela=$parcela;
        $this->repositorybanco=$banco;
        $this->repositorycaixa=$caixa;
        $this->repositorymovimentacao_caixa=$movimentacao_caixa;
        $this->objUser=new User();
        $this->objProduct=new ModelProduct();
        $this->objCategory=new ModelCategory();
        $this->objStory=new ModelStory();
        $this->objCarrinho=new ModelCarrinho();
        $this->objPedidovenda=new ModelpedidoVenda();
        $this->objDeposito=new ModelDeposito();
        $this->objLancamento=new ModelLancamentoGerencial();
        $this->objParcela=new ModelParcelas_lacamentogerencial();
        $this->objBanco=new ModelBanco();
        $this->objCaixa=new ModelCaixa();
        $this->objMovimentacao_caixa=new ModelMovimentacao_caixa();
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
        $pedidoVendas=$this->objPedidovenda->all();
        $caixas=$this->objCaixa->all();
        $bancos=$this->objBanco->all();
        return view('ajax.financeiro.caixa.visualizarCaixa', [
            'products'=>$products,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'users'=>$users,
            'pedidoVendas'=>$pedidoVendas,
            'caixas'=>$caixas,
            'bancos'=>$bancos,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        $carrinhos=$this->objCarrinho->all();
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $products=$this->objProduct->all();
        $pedidoVendas=$this->objPedidovenda->all();
        $caixas=$this->objCaixa->all();
        $bancos=$this->objBanco->all();
        return view('ajax.financeiro.caixa.cadastraCaixa', [
            'products'=>$products,
            'categorys'=>$categorys,
            'selectcategory'=>$selectcategory,
            'carrinhos'=>$carrinhos,
            'users'=>$users,
            'pedidoVendas'=>$pedidoVendas,
            'caixas'=>$caixas,
            'bancos'=>$bancos,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaixaRequest $request)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $request->value);
        $data= $request->all();
        $data['value']=$valor;
        $this->repositorycaixa->create($data);
        return redirect( route( 'index.caixa' ) )->with( 'success', 'Caixa adicionado com sucesso!' );
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
    public function edit($id)
    {
        $caixa=$this->repositorycaixa->find($id);
        $bancos=$this->objBanco->all();
        return view('ajax.financeiro.caixa.editCaixa',[
            'caixa'=>$caixa,
            'bancos'=>$bancos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaixaRequest $request, $id)
    {
        if(!$caixa=$this->repositorycaixa->find($id))
        {
            return redirect()->back();
        }
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $request->value);
        $data= $request->all();
        $data['value']=$valor;
        $caixa->update($data);
        return redirect( route( 'index.caixa' ) )->with( 'success', 'Caixa Editado com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$caixa=$this->repositorycaixa->find($id))
        {
            return redirect()->back();
        }
        try {
            $caixa->delete();
            return redirect( route( 'index.caixa' ) )->with( 'success', 'Caixa Excluido com sucesso!' );
        } catch (\Throwable $th) {
            if($th->getCode()==23000)
           {
            return redirect()->back()->with('error','Existe Movimentações nesse Caixa');
           }
            throw $th;
        }
       
    }
    public function search(Request $request)
    {
        $filters=$request->except('_token');
        $selectcategory=null;
        $categorys= ModelCategory::paginate(10);
        $bancos=$this->objBanco->all();
        $caixas=$this->repositorycaixa->search($request->filter1,$request->filter2,$request->filter3);

      return view('ajax.financeiro.caixa.visualizarCaixa', [
        'caixas'=>$caixas,
        'filters'=>$filters,
        'categorys'=>$categorys,
        'selectcategory'=>$selectcategory,
        'bancos'=>$bancos,
        ]);
    }
}
