@extends('layout.app')
@section('content')
@php
 require 'C:\wamp64\crud4\resources\views\ajax\formatado_numerico\formata_inteiro_decimal_br_tela.php';   
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="/../img/crud1.png"
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
            <h1>Solicitações de Envio do Pedido de venda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index.home')}}">Menu</a></li>
              <li class="breadcrumb-item active">Solicitações de Envio do Pedido de venda</li>
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
                  <form action="{{route('vendasonline.search')}}" method="post">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for=""> Codigo:</label>
                        <input type="text" name="filter" class="form-control" value="{{ $filters['filter'] ?? ''}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for=""> Data inicial/Vencimento:</label>
                        <input type="date" name="filter2" class="form-control" value="{{ $filters['filter2'] ?? ''}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for=""> Data final/Vencimento:</label>
                      <input type="date" name="filter3" class="form-control" value="{{ $filters['filter3'] ?? ''}}">
                      <div class="butons">
                      <button type="submit" style="justify-content: flex-end" class="btn btn-success"> <i class="fas fa-search"></i> </button>
                      </div>
                    </div>
                  </div>
                  </form>           
                  <div class="main-cad-cadastro"> 
                    <div class="card-body table-responsive p-0" style="height: 1000px;">  
                      <table class="table table-bordered data-table table-head-fixed text-center" id="example" >
                          <thead >
                            <tr>
                              <th scope="col" class="bg-primary">Number Pedido</th>
                              <th scope="col" class="bg-primary">Data_solicitação</th>
                              <th scope="col" class="bg-primary">Destinatario</th>
                              <th scope="col" class="bg-primary">Status</th>
                              <th  scope="col" class="bg-primary">Ações</th>
                            </tr>
                          </thead>
                          <tbody >
                            @php
                                 $numberPedido=0;
                            @endphp
                            @foreach ($solicitacao_pedido_venda as $item)
                            <tr>
                              @php
                                $Pedido=$solicitacao_pedido_venda->find($item->id)->relPedidoVenda;
                                $cliente=$Pedido->find($Pedido->id)->relUsers;
                                $status=$Pedido->find($Pedido->id)->relPedidoVendaStatus;
                              @endphp
                              @if ($numberPedido<$Pedido->numberPedido)
                                @php
                                    $numberPedido=$Pedido->numberPedido;
                                @endphp
                              <td>{{$Pedido->numberPedido}}</td>
                              <td>{{$item->created_at}}</td>
                              <td>{{$cliente->name}}</td>
                              <td>{{$status->name}}</td>
                              <td>
                                <a >
                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes"  data-id="{{$Pedido->numberPedido}}" data-nome="">
                                    <i class="far fa-eye"></i>
                                  </button>
                                </a>
                                <a href="{{route('EnvioPedido.vendasonline',$Pedido->id)}}">
                                    <button type="submit" class="btn btn-primary" title="Enviar pedido de venda">
                                      <i class="fas fa-truck-loading"></i>
                                    </button>
                                </a>
                              </td>
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                      <div class="modal fade" id="detalhes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg m-auto">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <input type="text" id="id" value="" name="id" hidden>
                              @php
                                  $id=0;
                              @endphp
                              <input class="modal-title" id="exampleModalLabel" value="" style="background: none;border:none"> 
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body bg-ligth">
                                <table class="table table-bordered" id="table-detalhe">
                                  <thead class="thead-white">
                                    <tr>
                                      <th scope="col">Imagem</th>
                                      <th scope="col">Produto</th>
                                      <th scope="col">preço</th>
                                      <th scope="col">Qtd</th>
                                      <th scope="col">subtotal</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                                </table>
                              </div>
                              <div class="modal-footer ">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                              </div>
                            </div>
                          </div>
                           
                      </div>   
                    </div>
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
       "scrollY": "500px",
       "scrollCollapse": true,
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


