@extends('layout.app')
@section('content')
@php
 require 'C:\wamp64\crud4\resources\views\ajax\formatado_numerico\formata_inteiro_decimal_br_tela.php';   
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="/img/crud1.png"
         alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">My crud</span>
  </a>
    <!-- Sidebar -->
    <div class="sidebar">
      {{-- <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-legacy nav-child-indent" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Menu de Navegação</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-industry"></i>
              <p>
                  Produto
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/products/index')}}" class="nav-link">
                  <i class="fas fa-tv"></i>
                  <p>Visualizar Produtos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-toolbox"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/category/index')}}" class="nav-link">
                    <i class="fas fa-list"></i>
                    <p>Visualizar categorias</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-box"></i>
                <p>
                  Estoque
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/story/index')}}" class="nav-link">
                    <i class="fas fa-box-open"></i>
                    <p>Visualizar Estoque</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/deposito/index')}}" class="nav-link">
                    <i class="fas fa-boxes"></i>
                    <p>Deposito</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/solicitacoes/envio/index')}}" class="nav-link active">
                    <i class="fas fa-truck-loading"></i>
                    <p>Solicitações de Envio</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-user-cog"></i>
                <p>
                  Usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="{{url('/user/index')}}" class="nav-link">
                    <i class="fas fa-list"></i>
                    <p>Visualizar  Usuarios</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                <p>
                  Comercial
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="{{url('/vendasonline/index')}}" class="nav-link">
                    <i class="fas fa-globe-americas"></i>
                    <p>Vendas online</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-money-check-alt"></i>
                <p>
                  Financeiro
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="{{url('/financeiro/index')}}" class="nav-link">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <p>Lancamento Gerencial</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="fas fa-cash-register"></i>
                    <p>Caixa</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/caixa/index" class="nav-link">
                        <i class="fas fa-landmark"></i>
                        <p>Gerenciamento de Caixa</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('/financeiro/indexBaixa')}}" class="nav-link">
                        <i class="fas fa-donate"></i>
                        <p>Baixa Lançamento</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="/banco/index" class="nav-link">
                    <i class="fas fa-piggy-bank"></i>
                    <p>Banco</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-file-alt"></i>
                <p>
                  Relatorios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/relatorio/indexuser')}}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>Relatorio de usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/relatorio/indexproducts')}}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    <p>Relatorio de Produtos</p>
                  </a>
                </li>
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enviar itens do Pedido</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index.home')}}">Menu</a></li>
              <li class="breadcrumb-item active">Enviar Pedido</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
       </section>
       <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="main-content">  
                            <table class="table table-bordered">
                              <thead class="thead-white">
                                <tr>
                                  <th scope="col">Imagem</th>
                                  <th scope="col">Produto</th>
                                  <th scope="col">preço</th>
                                  <th scope="col">Qtd</th>
                                  <th scope="col">subtotal</th>
                                </tr>
                              </thead>
                              @php
                                  $totalcomprado=0;
                                  $Pedido = $pedidoVendas->where('id',$pedidoId)->first();
                                  $Solicitacoes=$pedidoVendas->where('numberPedido',$Pedido->numberPedido)->all();
                              @endphp
                              @foreach ($Solicitacoes as $item)
                                  <tbody>
                                    @php
                                      $products=$item->find($item->id)->relproduct;
                                    @endphp
                                    <td > 
                                      @if ($products->image)
                                        <img src={{ url("storage/{$products->image}")}} alt="{{$products->name}}" style="max-width:100px">
                                      @endif
                                    </td>
                                    @php
                                      $subtotal=$item->value*$item->qtd;
                                      $subtota=inteiro_decimal_br_ponto($subtotal);
                                      $valor=inteiro_decimal_br_ponto($item->value);
                                    @endphp
                                    <td>{{$products->name}}</td>
                                    <td>R$ {{ $valor}}</td>
                                    <td style="max-width: 100px">
                                      {{$item->qtd}}
                                    </td>
                                    <td>R$ {{$subtota}}</td>
                                    @php
                                      $totalcomprado=$subtotal+$totalcomprado;
                                    @endphp
                                  </tbody>
                                  @php
                                    $id=$item->id;
                                  @endphp
                              @endforeach 
                              <tr>
                                <td> Total </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                @php
                                  $totalcomprado=inteiro_decimal_br_ponto($totalcomprado);
                                @endphp
                                <td>R$ {{$totalcomprado}}</td>
                              </tr>
                              @php
                                $totalcomprado=0;
                              @endphp
                            </table>
                            @php
                             $cont=0;
                             $statusPedido=$item->find($id)->relPedidoVendaStatus;
                            @endphp
                            @foreach ($Solicitacoes as $pedidoVenda)
                                <form action="{{route('updateEnvio.vendasonline',$pedidoVenda->numberPedido)}}" name="form-pedido-venda" method="post" enctype="multipart/form-data" onsubmit="return validarPedidovenda()" >
                                  @method('PUT')
                                  @php
                                  $products=$pedidoVenda->find($pedidoVenda->id)->relproduct;
                                  $story=$solicitacao_pedido_venda->find($solicitacao_pedido_venda[$cont]->id)->relStory;
                                  @endphp
                                  @csrf
                                  <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <fieldset disabled>
                                      <label for="">Produto a ser enviado:</label>
                                      <input type="text" value="{{$products->name}}" name="products_name[]" class="form-control">
                                    </fieldset>
                                    <input type="text" value="{{$products->id}}" name="products_id[]" class="form-control" hidden>
                                    <input type="text" value="{{$pedidoVenda->qtd}}" name="qtd[]" class="form-control" hidden>
                                    <input type="text" value="{{$pedidoVenda->id}}" name="pedido_venda_id[]" class="form-control" hidden>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="">Deposito de retirada:</label>
                                    <input type="text" value="{{$story->story}}" class="form-control" disabled >
                                    <input type="text" value="{{$story->id}}" name="story_id[]" class="form-control" hidden >
                                    </select>
                                    <div style="color: red ; background:rgb(233, 163, 163) " ><small id="erro1"></small></div><br>
                                </div>
                              </div>
                              @php
                                $cont++;
                              @endphp
                          @endforeach 
                                <div class="butons">
                                  <button type="submit" class="btn btn-success" >Enviar</button>
                                  <a class="btn btn-default" data-dismiss="modal">Cancelar</a>
                                </div>
                              </form>
                        </div>  
                </div>                                                             
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
  </div>
@endsection
@section('script')
<script>
  $(function () {
    $("#example").DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
       url: "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        },
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection


