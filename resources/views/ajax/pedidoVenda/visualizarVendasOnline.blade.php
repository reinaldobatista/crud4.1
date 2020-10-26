@extends('layout.apps')
@section('content')
@php
 require 'C:\wamp64\crud4\resources\views\ajax\formatado_numerico\formata_inteiro_decimal_br_tela.php';   
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-4">
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
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-shopping-cart"></i>
                <p>
                  Comercial
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="{{url('/vendasonline/index')}}" class="nav-link active">
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
            <h1>Visualizar Vendas online</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index.home')}}">Menu</a></li>
              <li class="breadcrumb-item active">Visualizar Vendas online</li>
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
                                            <th scope="col" class="bg-primary">Preço</th>
                                            <th scope="col" class="bg-primary">Comprador</th>
                                            <th scope="col" class="bg-primary">Data da compra</th>
                                            <th scope="col" class="bg-primary">Status</th>
                                            <th  scope="col" class="bg-primary">Ações</th>
                                          </tr>
                                        </thead>
                                        <tbody >
                                          @php
                                              $total=0;
                                              $number=0;
                                              $number1=0;
                                          @endphp
                                                      @foreach($pedidoVendas as $pedidoVenda )
                                                          @if ($pedidoVenda->numberPedido > $number)
                                                              @php
                                                              $pedidoVenda1=$pedidoVenda->getattributes();
                                                              $number=$pedidoVenda->numberPedido;
                                                              @endphp
                                                              @foreach ($pedidoVendas as $pedidoVenda)
                                                                    @php
                                                                        if ($pedidoVenda->numberPedido== $number)
                                                                        {
                                                                          $subtotal=$pedidoVenda->value*$pedidoVenda->qtd;
                                                                          $total=$subtotal+ $total;
                                                                          $id=$pedidoVenda->id;
                                                                        }
                                                                    @endphp
                                                              @endforeach 
                                                              @php
                                                                     $total=inteiro_decimal_br_ponto($total);
                                                              @endphp
                                                            <tr role="row" class="odd">
                                                              <td>{{$number}}</td>
                                                              <td>R$ {{$total}}</td>
                                                              @php                                             
                                                                $users=$pedidoVenda->find($id)->relUsers;
                                                                $statusPedido=$pedidoVenda->find($id)->relPedidoVendaStatus;
                                                              @endphp
                                                              <td>{{$users->name}}</td>
                                                              <td>{{$pedidoVenda1['created_at']}}</td>
                                                              <td>{{$statusPedido->name}}</td>
                                                              <td class="td-row" style="display:flex; flex-direction: row; align-items: center;justify-content: center;">
                                                                    <a >
                                                                      <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes{{$number}}" title="Visualizar pedido de venda">
                                                                        <i class="far fa-eye"></i>
                                                                      </button>
                                                                    </a>
                                                                    <a href="{{route('edit.vendasonline',$number)}}">
                                                                        <button type="submit" class="btn btn-primary" title="Envia requisição para o Deposito">
                                                                          <i class="fas fa-truck-loading"></i>
                                                                        </button>
                                                                    </a>
                                                                    {{-- <a >    
                                                                        <button type="submit" class="btn btn-danger" title="Deleta">
                                                                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                                          </svg>
                                                                          <form class="form-danger" id="{{$product->id}}" action="{{route('destroy.products',$product->id)}}"  method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                          </form> 
                                                                        </button>                              
                                                                    </a>    --}}
                                                                  
                                                                  <a href="{{route('create.faturamento',$id)}}">
                                                                    <button type="submit" class="btn btn-warning"  title="Fatura Pedido">
                                                                      <i class="fas fa-calculator"></i>
                                                                    </button>
                                                                  </a>
                                                                  <a href="{{route('Finish.vendasonline',$number)}}">
                                                                    <button type="submit" class="btn btn-success"  title="Finaliza pedido">
                                                                      <i class="far fa-check-square"></i>
                                                                    </button>
                                                                  </a>
                                                              </td>
                                                            </tr>
                                                  @endif
                                                  @php
                                                    $total=0;
                                                  @endphp
                                      @endforeach
                                        </tbody>
                                      </table>
                                      @for ($i = 1; $i <= $number; $i++)
                                      <div class="modal fade" id="detalhes{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg m-auto">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <h5 class="modal-title" id="exampleModalLabel">Detalhes do Pedido {{$i}}: </h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body bg-ligth">
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
                                                  @endphp
                                                  @foreach ($pedidoVendas as $pedidoVenda)
                                                    @if ($pedidoVenda->numberPedido==$i)
                                                      <tbody>
                                                        @php
                                                          $products=$pedidoVenda->find($pedidoVenda->id)->relproduct;
                                                        @endphp
                                                        <td > 
                                                          @if ($products->image)
                                                            <img src={{ url("storage/{$products->image}")}} alt="{{$products->name}}" style="max-width:100px">
                                                          @endif
                                                        </td>
                                                        @php
                                                          $subtotal=$pedidoVenda->value*$pedidoVenda->qtd;
                                                          $subtota=inteiro_decimal_br_ponto($subtotal);
                                                          $valor=inteiro_decimal_br_ponto($pedidoVenda->value);
                                                        @endphp
                                                        <td>{{$products->name}}</td>
                                                        <td>R$ {{ $valor}}</td>
                                                        <td style="max-width: 100px">
                                                          {{$pedidoVenda->qtd}}
                                                        </td>
                                                        <td>R$ {{$subtota}}</td>
                                                        @php
                                                          $totalcomprado=$subtotal+$totalcomprado;
                                                        @endphp
                                                      </tbody>
                                                    @endif
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
                                              </div>
                                              <div class="modal-footer ">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                              </div>
                                            </div>
                                          </div>
                                           
                                      </div>   
                                      @endfor
                                         @for ($i = 1; $i <= $number; $i++)
                                      <div class="modal fade" id="Finaliza{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg m-auto">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <h5 class="modal-title text-center" id="exampleModalLabel">Finaliza Pedido {{$i}}: </h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body bg-ligth">
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
                                                  @endphp
                                                  @foreach ($pedidoVendas as $pedidoVenda)
                                                    @if ($pedidoVenda->numberPedido==$i)
                                                      <tbody>
                                                        @php
                                                          $products=$pedidoVenda->find($pedidoVenda->id)->relproduct;
                                                        @endphp
                                                        <td > 
                                                          @if ($products->image)
                                                            <img src={{ url("storage/{$products->image}")}} alt="{{$products->name}}" style="max-width:100px">
                                                          @endif
                                                        </td>
                                                        @php
                                                          $subtotal=$pedidoVenda->value*$pedidoVenda->qtd;
                                                          $subtota=inteiro_decimal_br_ponto($subtotal);
                                                          $valor=inteiro_decimal_br_ponto($pedidoVenda->value);
                                                        @endphp
                                                        <td>{{$products->name}}</td>
                                                        <td>R$ {{ $valor}}</td>
                                                        <td style="max-width: 100px">
                                                          {{$pedidoVenda->qtd}}
                                                        </td>
                                                        <td>R$ {{$subtota}}</td>
                                                        @php
                                                          $totalcomprado=$subtotal+$totalcomprado;
                                                        @endphp
                                                      </tbody>
                                                      @php
                                                        $id=$pedidoVenda->id;
                                                      @endphp
                                                    @endif
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
                                                 $statusPedido=$pedidoVenda->find($id)->relPedidoVendaStatus;
                                                @endphp
                                                   <form action="{{route('updateFinish.vendasonline',$pedidoVenda->id)}}" method="post">
                                                    @method('PUT')
                                                    <div class="form-row">
                                                        @csrf
                                                    <input type="hidden" name="numberPedido" value="{{$i}}">
                                                        <div class="form-group col-md-12">
                                                            <label for=""> Status:</label>
                                                            <select class="form-control" name="statusPedido"  id="statusPedido{{$i}}"><br>
                                                                <option value="{{$statusPedido->id}}">{{$statusPedido->name}}</option>
                                                                  @foreach ($status as $statu)
                                                                    @if ($statu->name=="Finalizado")
                                                                         <option value="{{$statu->id}}">{{$statu->name}}</option>
                                                                    @endif
                                                                  @endforeach
                                                            </select>
                                                            <div style="color: red; background:rgb(233, 163, 163) "><small id="erro4"></small></div><br>
                                                        </div>
                                                         <div class="form-group col-md-12">
                                                            <label for=""> Observações:</label>
                                                            <textarea  class="form-control" rows="6"  type="text" id="observacoes{{$i}}" name="observacoes" placeholder="Descrição:"  value=""></textarea>
                                                            <div style="color: red ; background:rgb(233, 163, 163) " ><small id="erro1"></small></div><br>
                                                        </div>
                                                    </div>
                                              </div>
                                              <div class="modal-footer ">
                                                <a class="btn btn-primary" data-dismiss="modal">Cancelar</a>
                                                <button type="submit" class="btn btn-success" >Salvar</button>
                                              </form>
                                              </div>
                                            </div>
                                          </div>
                                           
                                      </div>   
                                      @endfor
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


