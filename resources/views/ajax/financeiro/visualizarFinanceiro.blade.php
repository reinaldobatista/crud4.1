@extends('layout.apps')
@section('content')
@php
 require 'C:\wamp64\crud4\resources\views\ajax\formatado_numerico\formata_inteiro_decimal_br_tela.php';   
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-orange elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="../img/crud1.png"
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
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
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
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-money-check-alt"></i>
                <p>
                  Financeiro
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="{{url('/financeiro/index')}}" class="nav-link active">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <p>Lancamento Gerencial</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link active">
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
            <h1>Lancamento Gerencial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index.home')}}">Menu</a></li>
              <li class="breadcrumb-item active">Lancamento Gerencial </li>
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
                  <div class="panel-row">
                    <a href="#">
                      <button class="panel panel-50" hidden  id="visualiza" a-view="visualizarProduto"  onclick="fetchContent(this)" a-folder="produto" >Visualizar produto</button>
                      </a>
                    <a href="{{route('create.financeiro')}}">
                        <button class="panel panel-50" ><i class="fas fa-plus"></i>Cadastrar</button>
                        
                    </a>
                  </div>
                    <form action="{{route('financeiro.search')}}" method="post">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Cliente/Fornecedor:</label>
                          <select class="form-control" name="filter" id="users">
                            <option value="{{ $filters['filter'] ?? ''}}">{{'Selecione o Cliente/Fornecedor'}}</option>
                            @foreach($users as $user)
                                <option value="{{ $filters['filter']=$user->id ?? ''}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for=""> Valor total:</label>
                          <input type="text" name="filter1" class="form-control" value="{{ $filters['filter1'] ?? ''}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for=""> Data inicial:</label>
                          <input type="date" name="filter2" class="form-control" value="{{ $filters['filter2'] ?? ''}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for=""> Data final:</label>
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
                                  <th scope="col" class="bg-primary">Cod. Pedido</th>
                                  <th scope="col" class="bg-primary">Preço</th>
                                  <th scope="col" class="bg-primary">Comprador</th>
                                  <th scope="col" class="bg-primary">Data da compra</th>
                                  <th  scope="col" class="bg-primary">Tipo</th>
                                  <th  scope="col" class="bg-primary">Ações</th>
                                </tr>
                              </thead>
                              <tbody >
                                @php
                                    $total=0
                                @endphp
                                            @foreach($lancamentos as $lancamento )
                                                  <tr role="row" class="odd">
                                                    @php                                             
                                                    // $status=$pedidoVenda->find($pedidoVenda->id)->relPedidoVendaStatus;
                                                    $users=$lancamento->find($lancamento->id)->relUsers;
                                                    $preco=inteiro_decimal_br_ponto($lancamento->value);
                                                  @endphp
                                                    <td>{{$lancamento->description}}</td>
                                                    <td>R$ {{ $preco}}</td>
                                                    <td>{{$users->name}}</td>
                                                    <td>{{$lancamento->created_at}}</td>
                                                    <td> Receita </td>
                                                    <td class="td-row" style="display:flex; flex-direction: row; align-items: center;justify-content: center;">
                                                      <form class="form-danger" id="{{$lancamento->id}}" action="{{route('destroy.financeiro',$lancamento->id)}}"  method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                          </svg>
                                                        </button>     
                                                      </form>
                                                    </td>
                                                  </tr>
                                            
                            @endforeach
                              </tbody>
                            </table>
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
  $(document).ready(function() {
  $('#users').select2({
    theme: 'bootstrap4'
  });
});
</script>
@endsection


