<html lang="en" style="height: auto;"><head>

    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">

  
  
  
  <title>
              MY Crud            </title>

  
      <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <!-- Theme style -->
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/all.css">
  <link rel="stylesheet" href="/assets/adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/assets/DataTables/css/fixedHeader.dataTables.css">
  <link rel="stylesheet" href="/assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  
          <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

      
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
          
                      
          
          
      
          
                          <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
          
                      
      <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
          
  
  

<body class="sidebar-mini" style="height: auto;">

  
      <div class="wrapper">

      
                  <nav class="main-header navbar
  navbar-expand
  navbar-white navbar-light">

  
  <ul class="navbar-nav">
      
      <li class="nav-item">
  <a class="nav-link" data-widget="pushmenu" href="#">
      <i class="fas fa-bars"></i>
      <span class="sr-only">Toggle navigation</span>
  </a>
</li>
      
      
      
          </ul>

  
  <ul class="navbar-nav ml-auto">
      
      
      
      
      
                                  <li class="nav-item dropdown user-menu">

  
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span>
          Reinaldo Batista
      </span>
  </a>

  
  <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

      
                          
      
      
      
      
      
      <li class="user-footer">
                      <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-fw fa-power-off"></i>
              Log Out
          </a>
          <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                              <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">
          </form>
      </li>

  </ul>

</li>
                  
      
          </ul>

</nav>
      
      
                  <aside class="main-sidebar sidebar-white-primary elevation-4">

  
          <a href="http://localhost:8000/home" class="brand-link ">

  
  <img src="http://localhost:8000/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE" class="brand-image img-circle elevation-3" style="opacity:.8">

  
  <span class="brand-text font-weight-light ">
      <b>My</b>Crud
  </span>

</a>
  
  
  <div class="sidebar">
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
              
              <li class="nav-header">
      Menu de Navega????o
  </li>

<li class="nav-item has-treeview menu-open">

  
  <a class="nav-link active " href="">

      <i class="fas fa-industry "></i>

      <p>
          Produto
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link active " href="http://localhost:8000/products/index">

      <i class="fas fa-tv "></i>

      <p>
          Visualizar Produtos

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-toolbox "></i>

      <p>
          Categorias
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/category/index">

      <i class="fas fa-list "></i>

      <p>
          Visualizar categorias

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-box "></i>

      <p>
          Estoque
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/story/index">

      <i class="fas fa-box-open "></i>

      <p>
          Visualizar Estoque

                  </p>

  </a>

</li>
<li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/deposito/index">

      <i class="fas fa-boxes "></i>

      <p>
          Adicionar Produto

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-user-cog "></i>

      <p>
          Usuario
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/user/index">

      <i class="fas fa-user "></i>

      <p>
          Visualizar Usuarios

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-shopping-cart "></i>

      <p>
          Comercial
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/vendasonline/index">

      <i class="fas fa-globe-americas "></i>

      <p>
          Vendas online

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-money-check-alt "></i>

      <p>
          Financeiro
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/financeiro/index">

      <i class="fas fa-file-invoice-dollar "></i>

      <p>
          Lancamento Gerencial

                  </p>

  </a>

</li>
<li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/financeiro/indexBaixa">

      <i class="fas fa-donate "></i>

      <p>
          Baixa de Lancamentos

                  </p>

  </a>

</li>
  </ul>

</li>
<li class="nav-item has-treeview ">

  
  <a class="nav-link  " href="">

      <i class="fas fa-file-alt "></i>

      <p>
          Relatorios
          <i class="fas fa-angle-left right"></i>

                  </p>

  </a>

  
  <ul class="nav nav-treeview">
      <li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/relatorio/indexuser">

      <i class="fas fa-users "></i>

      <p>
          Relatorio de usuarios

                  </p>

  </a>

</li>
<li class="nav-item">

  <a class="nav-link  " href="http://localhost:8000/relatorio/indexproducts">

      <i class="fas fa-file-alt "></i>

      <p>
          Relatorio de Produtos

                  </p>

  </a>

</li>
  </ul>

</li>
          </ul>
      </nav>
  </div>

</aside>
      
      
      <div class="content-wrapper " style="min-height: 583px;">

          
          <div class="content-header">
              <div class="container-fluid">
                                  </div>
          </div>

          
          <div class="content">
              <div class="container-fluid">
                  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-white-primary elevation-4">
<!-- Brand Logo -->
<a href="#" class="brand-link">
  <img src="../img/crud1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">My crud</span>
</a>
  <!-- Sidebar -->
  <div class="sidebar">
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">Menu de Navega????o</li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="fas fa-industry"></i>
            <p>
                Produto
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://localhost:8000/products/index" class="nav-link active">
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
                <a href="http://localhost:8000/category/index" class="nav-link">
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
                <a href="http://localhost:8000/story/index" class="nav-link">
                  <i class="fas fa-box-open"></i>
                  <p>Visualizar Estoque</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://localhost:8000/deposito/index" class="nav-link">
                    <i class="fas fa-boxes"></i>
                    <p>Adicionar Produto</p>
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
                <a href="http://localhost:8000/user/index" class="nav-link">
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
                <a href="http://localhost:8000/vendasonline/index" class="nav-link">
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
                <a href="http://localhost:8000/financeiro/index" class="nav-link">
                  <i class="fas fa-file-invoice-dollar"></i>
                  <p>Lancamento Gerencial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/financeiro/indexBaixa" class="nav-link">
                  <i class="fas fa-donate"></i>
                  <p>Baixa de Lancamentos</p>
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
                <a href="http://localhost:8000/relatorio/indexuser" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Relatorio de usuarios</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://localhost:8000/relatorio/indexproducts" class="nav-link">
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
<div class="content-wrapper" style="min-height: 583px;">
  <!-- Content Header (Page header) -->
  <section class="content-header ">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Visualizar Produtos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="http://localhost:8000">Menu</a></li>
            <li class="breadcrumb-item active">Visualizar Produtos</li>
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
                                  <button class="panel panel-50" hidden="" id="visualiza" a-view="visualizarProduto" onclick="fetchContent(this)" a-folder="produto">Visualizar produto</button>
                                  </a>
                                <a href="http://localhost:8000/products/create">
                                    <button class="panel panel-50"><i class="fas fa-plus"></i>Cadastrar</button>
                                    
                                </a>
                  </div>
                            <form action="http://localhost:8000/products/search" method="post">
                              <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                <div class="form-row">
                                <div class="form-group col-md-3">
                                   <label for=""> Nome:</label>
                                  <input type="text" name="filter" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-3">
                                  <label for=""> Categoria:</label>
                                  <select class="form-control select text-center" name="filter1" id="filter1">
                                                                                                                <option value="">Selecione a Categoria</option>
                                                                                                                                                          <option value="1">Eletrodomesticos</option>
                                                                                                                                                            <option value="3">Esporte e Lazer</option>
                                                                                                                                                            <option value="4">Smartphone e Telefones</option>
                                                                                                                                                            <option value="5">Brinquedos</option>
                                                                                                                                                            <option value="6">Cozinha</option>
                                                                                                                                                            <option value="7">Moveis</option>
                                                                                                                </select>
                                  
                              </div>
                                <div class="form-group col-md-3">
                                  <label for=""> Data inicial:</label>
                                  <input type="date" name="filter2" class="form-control" value="">
                              </div>
                              <div class="form-group col-md-3">
                                <label for=""> Data final:</label>
                                <input type="date" name="filter3" class="form-control" value="">
                                <div class="butons">
                                <button type="submit" style="justify-content: flex-end" class="btn btn-success"> <i class="fas fa-search"></i> </button>
                                </div>
                              </div>
                                
                            </div>
                            </form>
                              <div class="card-body"> 
                                <div class="main-cad-cadastro">  
                                  <div class="tbody">
                                                                                      </div><div class="modal fade" id="detalhes1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bicicleta MTB Al??minio Cairu Lotus Aro 29 21 Marchas Shimano: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="1">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bicicleta MTB Al??minio Cairu Lotus Aro 29 21 Marchas Shimano">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Bicicleta Cairu Aro 29 Lotus Feminina Quadro 17.5 Freio ?? Disco Mec??nico

Caracter??sticas:
Bicicleta aro 29 com componentes SHIMANO de 21 velocidades
Freios a disco mec??nico
Quadro em alum??nio 6061 tamanho 17.5
Suspens??o dianteira
Pneu 29 2.10
Aro 29 em alum??nio
Cubos dianteiro e traseiro 36 furos com esfera
Guid??o 31,8
Canote de selim 27.2 em alum??nio
Movimento central selado

Dimens??es:
Altura: 108 cm
Largura: 30 cm
Profundidade: 141 cm
Peso: 15.270 kg

Garantia do Fornecedor de 6 meses quadro e garfo e 3 meses para pe??as</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1000.55">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bola de Futebol de Campo Nike Brasileir??o 2019 Strike: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="2">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bola de Futebol de Campo Nike Brasileir??o 2019 Strike">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">CONTE??DO DA EMBALAGEM

1 Bola
GARANTIA DO FORNECEDOR

Contra Defeito De Fabrica????o
MATERIAL

Borracha
Poli??ster
Polietileno
PU (Poliuretano)
CIRCUNFER??NCIA (CM)

66,00
SELO

CBF - Confedera????o Brasileira De Futebol
SAC DO FORNECEDOR

NIKE: S??o Paulo: (11) 3020-8118 Demais Localidades: 0800 703 6453
ESTAMPA

Personalizada
PRESS??O (LBS)

8-12 Psi / 0.6-0.8 Bar</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="76.68">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bola de Futebol de Campo Puma Big Cat 3: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="3">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bola de Futebol de Campo Puma Big Cat 3">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">CONTE??DO DA EMBALAGEM

1 Bola
GARANTIA DO FORNECEDOR

Contra Defeito De Fabrica????o
MATERIAL

Borracha
EVA
PU (Poliuretano)
CIRCUNFER??NCIA (CM)

69,00
SAC DO FORNECEDOR

PUMA: (11) 2135-9999
ESTAMPA

Personalizada
PRESS??O (LBS)

8-12 Psi / 0.6-0.8 Bar</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="35.64">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bola de Futebol de Campo adidas Starlancer VII: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="4">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bola de Futebol de Campo adidas Starlancer VII">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">CONTE??DO DA EMBALAGEM

1 Bola
GARANTIA DO FORNECEDOR

Contra Defeito De Fabrica????o
MATERIAL

TPU
CIRCUNFER??NCIA (CM)

69,00
SAC DO FORNECEDOR

ADIDAS: Brasil 0800-55-62-77 - Grande S??o Paulo (11) 2161-2961
ESTAMPA

Personalizada
PRESS??O (LBS)

0.5-0.7 Bar/7.3-10.2 Psi</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="52.19">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bicicleta Aro 29 Dropp A??o Mtb 21 Marchas C??mbios (imp.) Freio ?? Disco Mec??nico Preto e Laranja 17: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="5">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bicicleta Aro 29 Dropp A??o Mtb 21 Marchas C??mbios (imp.) Freio ?? Disco Mec??nico Preto e Laranja 17">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">DESCRI????O DOS COMPONENTES



Quadro e Suspens??o

- Quadro Marca Dropp - Modelo Mtb  2018 - Aro 29 em A??O??
- Garfo R??gido Aro 29 em A??o 



Kit De Marchas

- Alavanca / Trocador Revo Shift - 21V Importado
- C??mbio Dianteiro (Importado) 
- C??mbio Traseiro (Importado)

- Pedivela Reduzido em A??o Preto 22-34-42T 

- Catraca / Roda Livre 7v Importado
- Corrente 7V Importado



Rodas E Freios

- Freio a Disco 160mm Preto - MEC??NICO 
- Cubos p/ Disco 36f Preto com Porcas
- Aros Aero 36 Furos Folha Dupla Alum??nio Preto com Adesivos Personalizados 
- C??mara de Ar 29 x 1.95 Bico Grosso
- Pneu (Imp.) 29x2.10 Cravo Baixo



Dire????o e Selim

- Guid??o expandido Preto em A??o
- Suporte de Guid??o / Mesa Preto em A??o

- Canote de Selim Preto em A??o
- Abra??adeira C/ Blocagem em A??o Preto 
- Banco / Selim - Sport



Rolamentos e Outros

- Movimento Central Roller 122.5 Preto Selado

- Movimento de Dire????o Aheadset Preto
- Manopla Preto Confort plus
- Espa??ador Aheadset 3P??



Peso Aprox. 14.900 Kg</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="678">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Bicicleta Colli Bikes 21 Marchas Aro 29 Freio a Disco Mec??nico Sparta: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="6">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Bicicleta Colli Bikes 21 Marchas Aro 29 Freio a Disco Mec??nico Sparta">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Marchas: 21
Finalidade: Mountain Bike
Quadro: A??o carbono
Guid??o: A??o carbono
Suporte do guid??o: Alum??nio
Manopla: Borracha
Pedal: nylon
Cubo dianteiro: a??o 36 furos
Cubo traseiro: a??o 36 furos
Aros: aero
Pneus: 29 x 2,10
Selim: Premium
Canote do selim: Alum??nio
Tamanho do Quadro em Polegadas: 19"
Caracter??sticas Gerais- Tipo de freio: a disco
- Peso suportado: 120kg</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1009.9">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Sof?? Retr??til e Reclin??vel 3 Lugares 2,32m Lisboa Cama Inbox: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="7">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Sof?? Retr??til e Reclin??vel 3 Lugares 2,32m Lisboa Cama Inbox">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Sof?? Retr??til e Reclin??vel 3 Lugares 2,32m Lisboa Cama Inbox

Chegou o Maravilhoso Sof?? Lisboa. O que o torna especial s??o assentos com espuma D33 envolvidas em fibra Siliconada Compactada para que tenha um toque gostoso e aconchegante, al??m de seu maravilhoso designer com costuras duplas e puxes que o embelezam, proporcionando conforto de um colch??o em um Bel??ssimo Sof??. Sua sala jamais ser?? como antes!
Informa????es importantes:
- Os objetos que ambientam as fotos n??o acompanham o produto.
- Os tecidos podem sofrer altera????es de tonalidades dependendo do lote de produ????o.
- Verifique as dimens??es do produto e certifique-se que o percurso que ele far?? at?? o local de uso permite sua passagem.
- Nos responsabilizamos pela entrega dos produtos adquiridos at?? a porta de entrada ou portaria do endere??o indicado. Quaisquer despesas ou dano no transporte at?? o local de uso ficam a cargo do cliente. "As transportadoras n??o sobem escadas ou elevadores".</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1914.58">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Sof?? 3 Lugares Kivik Capiton?? Cinza: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="8">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Sof?? 3 Lugares Kivik Capiton?? Cinza">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Cor	Cinza
Garantia	6 Meses
Conte??do da Embalagem	1 Sof?? (Acompanha Almofadas) - Entregue em: 1 Volume
Modelo	Kivik
Material	Estrutura em Madeira, Assento com Mola S, Espuma D33 e Manta Acr??lica, Encosto com Percinta Sint??tica Tran??ada, P??s e Rodap?? em Madeira Maci??a Tauari; Revestimento em Tecido 100 % Poli??ster com Apar??ncia de Linho
Descri????o do Tamanho	Altura: 85 cm
Largura: 200 cm
Profundidade: 80 cm
Largura do bra??o: 14 cm
Altura do p??s: 14 cm
Produto precisa de Montagem?:	Sim, instala????o dos p??s
Tipo de Encosto:	Fixo
Peso suportado por assento (kg):	120.00
Quantidade de Pe??as	1 pe??a
Tipo de p??: Fixo
Altura do assento at?? o ch??o (cm):	47
Acompanha banco/puff:	N??o
Material da estrutura:	Madeira
Material do enchimento do encosto:	Espuma D33
Possui Ba???:	N??o
Tipo de assento:	Fixo</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1603.79">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Smart TV LED 32" HD Samsung 32J4300 com Connect Share Movie, Screen Mirroring, Wi-Fi, Entradas HDMI e Entrada USB: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="9">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Smart TV LED 32&quot; HD Samsung 32J4300 com Connect Share Movie, Screen Mirroring, Wi-Fi, Entradas HDMI e Entrada USB">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Controle remotoSim
Conversor para TV digital integradosim
Caracter??sticas Gerais
56mm
Design Slim e elegante. Feita para ser o centro das aten????es na sua casa.

Screen Mirroring
Com a nova Samsung Smart TV, voc?? pode desfrutar de conte??do de dispositivos m??veis com rapidez e facilidade em uma tela maior. Divirta-se com aplicativos, jogos e muito mais em uma TV de tamanho m??ximo.

Connect Share Movie
Com o Connect Share Movie, basta voc?? conectar uma unidade de mem??ria USB ou uma unidade de disco r??gido ?? TV e desfrutar instantaneamente de filmes, fotos ou m??sicas. Agora, voc?? poder?? desfrutar de uma grande variedade de conte??dos confortavelmente na TV de sua sala de estar.

HD 720p
Imagens em alta resolu????o para aproveitar cada detalhe.

Wireless LAN Built-in
Acesse a Internet sem precisar de fios. O Wi-Fi Embutido melhora as capacidades de conectividade de sua TV sem a necessidade da conex??o por fios.

Clear Motion Rate 120Hz
As mais emocionantes imagens em movimento aparecem com detalhes deslumbrantes.

Wide Color Enhancer Plus
Intensifica a tonalidade das cores e torna a experi??ncia ao assistir TV muito mais real e surpreendente.

HDMI
Conecte v??rios dispositivos, oferecendo alta qualidade direto para sua TV.

DTV
Pronta para a recep????o das transmiss??es digitais sem a utiliza????o de outro aparelho adicional.

Smart TV
- Smart Hub
- Samsung Apps
- Idiomas: portugu??s
- Allshare (Content Sharing, Screen Mirroring)
- Wireless LAN Embutido
- Wi-Fi Direct

??udio:
- DTS Premium Sound: DTS Studio Sound
- DTS Codec: DTS Premium sound
- Tipo de Alto-falante: Down Firing + Base Reflex
Wi-Fi integradoSim
Tecnologia da TelaLED
Formato da TelaPlana
Entrada USB1
Entrada HDMI2
Tamanho da tela32"
Conex??es- 2 HDMI
- 1 USB
- 1 Entrada componente (Y/Pb/Pr)
- 1 Entrada v??deo composto (AV - 1 Uso comum para component Y)
- 1 Rede Ethernet (LAN)
- 1 Sa??da de ??udio ??ptico
- 2 Entradas de RF (RF/Cabo)</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1399">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Smart TV LED 32'' LG HD HDR Ativo e WebOS 4.0: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="10">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Smart TV LED 32'' LG HD HDR Ativo e WebOS 4.0">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Nome da marca:	LG
Modelo:	32LK615BPSB
Nome do modelo:	32LK615BPSB
Registro no Inmetro:	005433/2017
Ano do modelo:	2018
N??mero da pe??a:	32LK615BPSB
Tipo Do Produto:	??udio e v??deo
Resolu????o:	HD (1366 x 768)
Pe??as para montagem:	TV LGBase e parafusos de fixa????oCabo de for??a (Padr??o ABNT)Organizador de CabosManual do Usu??rioControle remotoPilhas AAA
N??mero de unidades:	1
Tamanho da tela:	32 polegadas
Tela ou mostrador:	LED
Propor????o da tela:	16:9
Configura????o de canais de surround: sound nos alto-falantes	2.0
Fonte de alimenta????o:	Tomada
Baterias inclusas:	Sim
Funciona com baterias	:Sim
Composi????o da pilha ou bateria:	Zinco-carbono
Taxa de atualiza????o:	60
Tecnologia de conex??o: HDMI, USB
Inclui controle remoto:  Sim
Cor	Preto</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1388.9">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Smartphone Samsung Galaxy A10 32GB Dual Chip Android 9.0 Tela 6.2" Octa-Core 4G C??mera 13MP - Vermelho: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="11">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Smartphone Samsung Galaxy A10 32GB Dual Chip Android 9.0 Tela 6.2&quot; Octa-Core 4G C??mera 13MP - Vermelho">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">C??digo:	134254006
C??digo de barras:	7892509106917, 7892509107549
NFC:	N??o
Conex??es:	4G
Peso liq. aproximado do produto (Kg):	170g
Banda:	B1(2100), B2(1900), B4(AWS), B5(850), B8(900)
Tipo de Tela:	LCD TFT
Tipo de Chip:	Nano Chip
Mem??ria RAM:	2GB
Refer??ncia do Modelo:	Galaxy A10
Filmadora:	Full HD
Sistema Operacional:	Android
Recursos de chamada:	Viva Voz
Multichip:	Dual Chip
Fabricante:	Samsung
Vers??o S.O.	Android: 9.0
Mem??ria Interna:	32GB
Expansivo at???:	MicroSD at?? 512GB
C??mera frontal	:5MP
Dimens??es do produto - cm (AxLxP):	15,5x7x0,07cm
SAC:	4004-0000 (Capitais e grandes centros) ou 0800-124-421 (Demais cidades e regi??es)
Processador:	Octa-Core
C??mera traseira:	13MP
Sintonizador de TV:	N??o possui
Tamanho do Display:	6.2"
Conte??do da Embalagem:	Aparelho celular, carregador, cabo USB, fone de ouvido, Extrator de Chip e manual do usu??rio
Garantia do Fornecedor:	12 Meses
Resolu????o:	720 x 1520 (HD+)
Modelo:	SM-A105M/32DL
Alimenta????o, tipo de bateria:	Bateria de ??ons de L??tio de 3400 mAh</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1229">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Smartphone Samsung Galaxy S10 128GB Dual Chip Android Tela 6.1??? Octa-Core 4G C??mera Tripla Traseira 12MP + 12MP + 16MP - Branco: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="12">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Smartphone Samsung Galaxy S10 128GB Dual Chip Android Tela 6.1??? Octa-Core 4G C??mera Tripla Traseira 12MP + 12MP + 16MP - Branco">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">C??digo:	134217467
C??digo de barras:	7892509105873, 7892509105477
Fabricante:	Samsung
Marca:	Samsung
Preco venda:	4999
C??mera frontal:	10MP
Filmadora:	Full HD
Sintonizador de TV:	N??o possui
NFC:	Sim
Processador:	Octa-Core
Mem??ria RAM:	8GB
Mem??ria Interna:	128GB
Expansivo at???:	MicroSD at?? 400GB
Banda:	B1(2100), B2(1900), B3(1800), B5(850), B8(900)
Conex??es:	Wi-Fi,3G,4G
Recursos de chamada:	Viva Voz
Alimenta????o, tipo de bateria:	Bateria de Ions de L??tio de 3400 mAh
Tipo de Chip:	Nano Chip
Sistema Operacional:	Android
Vers??o S.O.	Android: 9.0
Tipo de Tela:	AMOLED
Tamanho do Display:	6.1"
Resolu????o:	3040 x 1440 (Quad HD+)
Multichip:	Dual Chip
C??mera traseira:	12MP
Modelo:	SM-G973F/1DL
Cor	Branco
Conte??do da Embalagem:	1 Aparelho celular, 1 capa protetora, 1 carregador, 1 cabo USB, 1 conector de USB, fone de ouvido, 1 Extrator de Chip e manual do usu??rio
Garantia do Fornecedor:	12 Meses
Dimens??es do produto - cm (AxLxP):	14,9x7x0,7cm
Peso liq. aproximado do produto (Kg):	157g
Refer??ncia do Modelo:	Galaxy S10
SAC:	Atendimento ao cliente: 4004-0000 (Capitais e grandes centros) - 0800 124 421 (Demais cidades e regi??es) - Hor??rio de Atendimento: Segunda ?? Sexta: 08:00h ??s 20:00h e aos S??bados: 09:00h ??s 15:00h</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="2849">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Fog??o 6 Bocas Brastemp Branco - Acendimento Autom??tico BFS6 NCBUNA: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="16">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Fog??o 6 Bocas Brastemp Branco - Acendimento Autom??tico BFS6 NCBUNA">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Fog??o 6 Bocas Brastemp Branco - Acendimento Autom??tico BFS6 NCBUNA
O fog??o ?? respons??vel pela prepara????o das refei????es, ?? atrav??s dele que ?? feita a comida especial que alimenta sua fam??lia e os amigos. Ganhe mais praticidade e sofistica????o na sua cozinha com o fog??o branco BFS6NCBUNA da Brastemp. Com um toque de modernidade esse fog??o super pr??tico traz diversos recursos que tornam qualquer receita mais simples de ser realizada. Ele possui acendimento autom??tico, dispensando acendedores ou f??sforos e 6 bocas com queimadores potentes. Conta com bot??es remov??veis com exclusivo Aro Protetor que protege contra a entrada de sujeira e facilita a limpeza.</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1331.1">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Sofa It??lia 2,25 Mts Retr??til e Reclinavel Tecido Suede Caf?? - Cama InBox: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="17">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Sofa It??lia 2,25 Mts Retr??til e Reclinavel Tecido Suede Caf?? - Cama InBox">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">informa????es do produto
Procurando um estofado amplo, confort??vel, bonito e que combine com seu ambiente? Conhe??a o Sof?? It??lia. Sua estrutura desenvolvida em madeira de eucalipto de reflorestamento proporciona maior seguran??a e qualidade ao m??vel. Seu revestimento ?? em tecido Suede, seus assentos, encostos e bra??os em fibra de silicone faz deste produto sin??nimo de sofistica????o e extremo conforto. Seu design com encosto reclin??vel e assentos retr??teis tornam este produto muito espa??oso para voc?? e sua fam??lia! Desfrutar de um bom filme em sua sala n??o ser?? mais como antes...


O Estofado It??lia tamb??m est?? dispon??vel neste site nas medidas  2,00m  -  2,40m  -  2,60m  - 2,80m,  sendo quatro op????es de cores cada.


Caracter??sticas:

- Encosto: Reclin??vel em fibra de silicone / Flocos de espuma

- Assentos: Retr??til com espuma D28 coberto por uma manta em fibra de silicone / Flocos de espuma muito macio...

- Bra??os em fibra de silicone macio como um travesseiro

- Fixa????o: Grampos galvanizados antiferrugem

- Estrutura desenvolvida em madeira de eucalipto e pinus

- Suporta at?? 110kg por pessoa


Medidas montado:

Pe??a de 2,25m

Acomoda at?? 4 pessoas

Altura: 100cm

Largura fechado: 105cm

Largura aberto: 150cm

Comprimento: 225cm


Uma Praticidade: Um dos bra??os ?? remov??vel para facilitar o transporte em corredores estreitos e escadas.


F??cil montagem, n??o ?? necess??rio montador.

*3 meses de Garantia


Marca: Moveis Marfim


Informa????es importantes:

- Os objetos que ambientam as fotos n??o acompanham o produto.

- Fique atento, nossas cores podem sofrer altera????es dependendo do seu monitor.

- Verifique as dimens??es do produto e certifique-se que o percurso que ele far?? at?? o local de uso permite sua passagem.

- Nos responsabilizamos pela entrega dos produtos adquiridos at?? a porta de entrada ou portaria do endere??o indicado. Quaisquer despesas ou dano no transporte at?? o local de uso ficam a cargo do cliente.</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1149.9">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Sound Tower Samsung Mx-t55, Com Pot??ncia De 500w E Som Bi-direcional: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="18">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Sound Tower Samsung Mx-t55, Com Pot??ncia De 500w E Som Bi-direcional">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">C??digo:	1853881962
C??digo de barras:	7892509114967
Fabricante:	Samsung
Alimenta????o:	Consumo de energia em Stand-by 0,5 W
Conex??es:	USB Music Playback, Bluetooth, Bluetooth Codec aptX, Bluetooth Multi Connection, USB (2 entradas), Bluetooth sempre ligado, Entrada Anal??gica (3.5 mm), Modo Grupo - conex??o via cabo, Modo Grupo - conex??o sem fio, Modo Karaoke - Entradas de Microfone Sim (1 entrada).
Voltagem:	Bivolt
Caracter??sticas do Display:	Display Digital Integrado
Pot??ncia RMS:	500W
R??dio AM/FM:	N??o Possui
Mem??ria para esta????es de radio:	N??o
Fun????es	Recursos Especiais: LED Party Lights Party / Ambient / Dance / Thunderbolt / Star / Lover, Bass Booster, DJ Effect Noise, Filter, Crush, Chorus, WahWah, Modo Karaoke, Samsung Party Audio App
Subwoofer:	Sim
Cor:	Preto
Conte??do da Embalagem:	Torre de Som, cabo de alimenta????o, manual do usu??rio, controle remoto, pilhas para controle remoto.
Garantia do Fornecedor:	12 Meses
Refer??ncia do Modelo:	MX-T55/ZD</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="1499.99">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Smartphone Samsung Galaxy S9 Dual Chip Android 8.0 Tela 5.8" Octa-Core 2.8GHz 128GB 4G C??mera 12MP - Ultravioleta: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="19">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Smartphone Samsung Galaxy S9 Dual Chip Android 8.0 Tela 5.8&quot; Octa-Core 2.8GHz 128GB 4G C??mera 12MP - Ultravioleta">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">C??digo:	133273660
C??digo de barras:	7892509097079, 7892509097314
Marca:	Samsung
Modelo:	SM-G9600/1DL
Cor:	Violeta
Tipo de Chip:	Nano Chip
Quantidade de Chips:	Dual Chip
Mem??ria Interna:	128GB
Mem??ria RAM:	4GB
Processador:	Octa-Core 2.8GHz (Quad 2.8GHz + Quad 1.7GHz)
Sistema Operacional:	Android
Vers??o	Android: 8.0
Tipo de tela:	Super AMOLED
Tamanho do Display:	5.8"
Resolu????o:	2960 x 1440 (Quad HD+)
C??mera traseira:	12MP
C??mera frontal:	8MP
Filmadora:	4K
Expansivo at??:	MicroSD at?? 200GB
Alimenta????o/Tipo de bateria:	Bateria de Ions de L??tio de 3000 mAh
Banda:	2G GSM (GPRS/EDGE) GSM 850MHz, GSM 900MHz, GSM 1800 MHz, GSM 1900 MHz, CDMA 800MHz; 3G Bandas B1(2100), B2(1900), B4(AWS), B5(850), B8(900); 3G Downlink / Uplink HSPA+ 42.2 / 5.76 Mbps; 4G Bandas B1(2100), B2(1900), B3(1800), B4(AWS), B5(850), B7(2600), B8(900), B12(700), B13(700), B17(700), B18(800), B19(800), B20(800), B25(1900), B26(850), B28(700), B66(AWS-3); 4G categoria Cat. 18
Conectividade:	Wi-Fi, 3G, 4G
NFC:	Sim
TV:	N??o possui
Recursos de Chamada:	Viva Voz
Conte??do da Embalagem:	Aparelho celular, capa protetora, carregador, cabo USB, conector de USB tipo C, fone de ouvido, extrator de chip e manual do usu??rio
Dimens??es aproximadas do produto - cm (AxLxP):	14,7x6,8x0,8cm
Peso l??q. aproximado do produto (kg):	163g
Garantia do Fornecedor:	12 Meses
Refer??ncia do modelo:	Galaxy S9
Fornecedor:	Samsung
SAC:	4004-0000 (Capitais e grandes centros) ou 0800 124-421 (Demais cidades e regi??es)
C??digo de Barras:	7892509097079, 7892509097314</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="2199">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Cooktop ?? G??s Consul 5 Bocas CD075 Acendimento Inteligente Preto: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="20">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Cooktop ?? G??s Consul 5 Bocas CD075 Acendimento Inteligente Preto">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">C??digo:	112269549
C??digo de barras:	7891129212213
Marca:	Consul
Tipo de Fog??o:	G??s
Material/Composi????o:	A??o Inox; Vidro Temperado
Acendimento:	Autom??tico
Quantidade de Bocas:	5
Caracter??sticas dos queimadores:	Queimador r??pido
Voltagem:	Bivolt
Pot??ncia (w):	3000W; 1800W
Cor:	Preto
Termostato:	N??o
Conte??do da embalagem:	1 Cooktop e 1 Manual de instru????es
Garantia do fornecedor:	12 meses
Peso aproximado do produto (Kg):	10kg
Refer??ncia do modelo:	CD075AEUNA
Fornecedor:	Whirlpool</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="559.99">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div class="modal fade" id="detalhes21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg m-auto">
                                              <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do produto Fog??o 5 Bocas Mesa de Inox S??rius Plus com Acendimento Autom??tico Braslar: </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">??</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body bg-ligth">
                                                  <form></form>
                                                    <fieldset disabled=""> 
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>C??digo</label>
                                                          <input type="text" class="form-control" value="21">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label>Produto</label>                                
                                                            <input type="text" class="form-control" value="Fog??o 5 Bocas Mesa de Inox S??rius Plus com Acendimento Autom??tico Braslar">
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                          <label>Descri????o</label>
                                                          <textarea name="description" cols="105" rows="10">Caracter??sticas:

Mesa em Inox com Bordas Dobradas

Acendimento Autom??tico Total

Forno com Tecnologia Easy-Clean

Trempes esmaltada com tecnologia Easy-Clean

Queimadores forjados estampados

Manipuladores anat??micos

Puxador do forno tubular arredondado

Visor total na porta do forno

Volume do Forno : 80 L

Cor: Preto

Material da mesa: Inox

Material do painel frontal: A??o/cor

Material estufa do forno: A??o/cor

Tipo: Piso

Quantidade de bocas: 5

queimador r??pido: (3kW) 1 de 3000W

queimadores f??milia: 2 de 1750W

queimador ramal: 2 de 1500W

Trempe: Individual

Tipo de forno: G??s

Tipo de G??s: GPL ou g??s natural

Press??o do G??s : 27 mBar (GLP) - 20mPA (g??s natural)

Pot??ncia Total: (kW) / Queimadores + Forno 8,68 kW

Classifica????o Energ??tica: Mesa A

Classifica????o Energ??tica: Forno B</textarea>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label>Pre??o</label>
                                                            <input type="text" class="form-control" value="699.9">
                                                          </div>
                                                        </div></fieldset>
                                                      
                                                </div>
                                                <div class="modal-footer ">
                                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div><div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label><select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> resultados por p??gina</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Pesquisar<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 628px; padding-right: 17px;"><table class="table table-bordered data-table text-center dataTable no-footer" role="grid" style="margin-left: 0px; width: 628px;"><thead>
                                        <tr role="row"><th scope="col" class="bg-primary sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="C??digo: Ordenar colunas de forma descendente" style="width: 49px;">C??digo</th><th scope="col" class="bg-primary sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Imagem: Ordenar colunas de forma ascendente" style="width: 82px;">Imagem</th><th scope="col" class="bg-primary sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Produto: Ordenar colunas de forma ascendente" style="width: 58px;">Produto</th><th scope="col" class="bg-primary sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Categoria: Ordenar colunas de forma ascendente" style="width: 99px;">Categoria</th><th scope="col" class="bg-primary sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Pre??o: Ordenar colunas de forma ascendente" style="width: 40px;">Pre??o</th><th scope="col" class="bg-primary sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="A????es: Ordenar colunas de forma ascendente" style="width: 41px;">A????es</th></tr>
                                      </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 500px; width: 100%;"><table class="table table-bordered data-table text-center dataTable no-footer" id="example" role="grid" aria-describedby="example_info" style="width: 100%;"><thead>
                                        <tr role="row" style="height: 0px;"><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 49px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">C??digo</div></th><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 82px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Imagem</div></th><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 58px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Produto</div></th><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 99px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Categoria</div></th><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 40px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Pre??o</div></th><th scope="col" class="bg-primary sorting" aria-controls="example" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 41px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">A????es</div></th></tr>
                                      </thead>
                                      
                                    
                                        <tbody>
                                        
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                                  
                                          
                                                                            
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/D3Yn4srsoK5CIorTHPLzj4cKL0oC7dn9eHCTvDXY.webp" alt="Bicicleta MTB Al??minio Cairu Lotus Aro 29 21 Marchas Shimano" style="max-width:100px">
                                                                                            </td>
                                            <td>Bicicleta MTB Al??minio Cairu Lotus Aro 29 21 Marchas Shimano</td>
                                                                                          <td>Esporte e Lazer</td>
                                            <td>1.000,55</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/1">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/1" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="1" action="http://localhost:8000/products/destroy/1" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes1">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">2</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/sD4KKDd0DOiN2VFlRVYOlaqMYXYLvC41NnHM5NUn.jpeg" alt="Bola de Futebol de Campo Nike Brasileir??o 2019 Strike" style="max-width:100px">
                                                                                            </td>
                                            <td>Bola de Futebol de Campo Nike Brasileir??o 2019 Strike</td>
                                                                                          <td>Brinquedos</td>
                                            <td>76,68</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/2">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/2" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="2" action="http://localhost:8000/products/destroy/2" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes2">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">3</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/2wclqWTz2HpT25wjw7S7vqjukeJyrfoUAW0rGehg.jpeg" alt="Bola de Futebol de Campo Puma Big Cat 3" style="max-width:100px">
                                                                                            </td>
                                            <td>Bola de Futebol de Campo Puma Big Cat 3</td>
                                                                                          <td>Brinquedos</td>
                                            <td>35,64</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/3">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/3" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="3" action="http://localhost:8000/products/destroy/3" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes3">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">4</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/6rq6UnVvpZdlNqUfR7djKoXPXjJRxndiq8RQeIVV.jpeg" alt="Bola de Futebol de Campo adidas Starlancer VII" style="max-width:100px">
                                                                                            </td>
                                            <td>Bola de Futebol de Campo adidas Starlancer VII</td>
                                                                                          <td>Brinquedos</td>
                                            <td>52,19</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/4">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/4" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="4" action="http://localhost:8000/products/destroy/4" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes4">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">5</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/30n8IjI8VCg4voNzxIyeJgUhbpBgwLtqhK8fj7dp.jpeg" alt="Bicicleta Aro 29 Dropp A??o Mtb 21 Marchas C??mbios (imp.) Freio ?? Disco Mec??nico Preto e Laranja 17" style="max-width:100px">
                                                                                            </td>
                                            <td>Bicicleta Aro 29 Dropp A??o Mtb 21 Marchas C??mbios (imp.) Freio ?? Disco Mec??nico Preto e Laranja 17</td>
                                                                                          <td>Esporte e Lazer</td>
                                            <td>678,00</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/5">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/5" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="5" action="http://localhost:8000/products/destroy/5" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes5">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">6</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/zENCCYm5lDHWldWvrmMkc4kL0uD76oZiniDSxITK.jpeg" alt="Bicicleta Colli Bikes 21 Marchas Aro 29 Freio a Disco Mec??nico Sparta" style="max-width:100px">
                                                                                            </td>
                                            <td>Bicicleta Colli Bikes 21 Marchas Aro 29 Freio a Disco Mec??nico Sparta</td>
                                                                                          <td>Esporte e Lazer</td>
                                            <td>1.009,90</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/6">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/6" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="6" action="http://localhost:8000/products/destroy/6" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes6">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">7</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/obJ8ASmrSkR5dUywGAH4vRBGbltAQB4gGyllpnPF.jpeg" alt="Sof?? Retr??til e Reclin??vel 3 Lugares 2,32m Lisboa Cama Inbox" style="max-width:100px">
                                                                                            </td>
                                            <td>Sof?? Retr??til e Reclin??vel 3 Lugares 2,32m Lisboa Cama Inbox</td>
                                                                                          <td>Moveis</td>
                                            <td>1.914,58</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/7">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/7" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="7" action="http://localhost:8000/products/destroy/7" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes7">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">8</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/CCamj2yZjup7jMpKhjOiT8CDZrZvVYscnvbnwxbc.jpeg" alt="Sof?? 3 Lugares Kivik Capiton?? Cinza" style="max-width:100px">
                                                                                            </td>
                                            <td>Sof?? 3 Lugares Kivik Capiton?? Cinza</td>
                                                                                          <td>Moveis</td>
                                            <td>1.603,79</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/8">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/8" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="8" action="http://localhost:8000/products/destroy/8" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes8">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="odd">
                                            <td class="sorting_1">9</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/FIebWZtLqnpw5ef4y79zamM7pZibrYVh9EqTbg6e.webp" alt="Smart TV LED 32&quot; HD Samsung 32J4300 com Connect Share Movie, Screen Mirroring, Wi-Fi, Entradas HDMI e Entrada USB" style="max-width:100px">
                                                                                            </td>
                                            <td>Smart TV LED 32" HD Samsung 32J4300 com Connect Share Movie, Screen Mirroring, Wi-Fi, Entradas HDMI e Entrada USB</td>
                                                                                          <td>Eletrodomesticos</td>
                                            <td>1.399,00</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/9">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/9" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="9" action="http://localhost:8000/products/destroy/9" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes9">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr><tr role="row" class="even">
                                            <td class="sorting_1">10</td>
                                            <td>
                                                                                                  <img src="http://localhost:8000/storage/products/UlumW2in8qugFEBmRqA8BD7ytLCgpn4WmgyNllYR.jpeg" alt="Smart TV LED 32'' LG HD HDR Ativo e WebOS 4.0" style="max-width:100px">
                                                                                            </td>
                                            <td>Smart TV LED 32'' LG HD HDR Ativo e WebOS 4.0</td>
                                                                                          <td>Eletrodomesticos</td>
                                            <td>1.388,90</td>
                                            <td style="flex-direction: row">
                                                      <a href="http://localhost:8000/products/edit/10">
                                                        <button class="btn btn-primary" a-view="editproduct" a-folder="produto/10" onclick="fetchContent(this)">
                                                          <i class="fas fa-edit"></i>
                                                        </button>
                                                  </a>
                                                  <form class="form-danger" id="10" action="http://localhost:8000/products/destroy/10" method="POST">
                                                    <input type="hidden" name="_token" value="Fhm0IfhuPVpngSChMcYOS3Zhch0DUiVFUp8FJGJl">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button type="submit" class="btn btn-danger">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                                                      </svg>
                                                    </button>  
                                                  </form> 
                                                  <a>
                                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#detalhes10">
                                                      <i class="far fa-eye"></i>
                                                    </button>
                                                  </a>
                                            </td>
                                          </tr></tbody>
                                 
                                    </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Mostrando de 1 at?? 10 de 18 registros</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Pr??ximo</a></li></ul></div></div></div></div>
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
              </div>
          </div>

      </div>

      
      
      
      
  <div id="sidebar-overlay"></div></div>
  <script src="/assets/adminlte/plugins/jquery/jquery.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="/assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/DataTables/js/dataTables.fixedHeader.js"></script>
  <script src="/assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/adminlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/adminlte/dist/js/demo.js"></script>
  <!-- page script -->
  <script src="/js/ajaxs.js"></script>
  <script src="/js/modal.js"></script>
  <script src="/js/validacao.js"></script>
  <script src="/assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="/assets/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="/assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
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
  
          <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
      <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

      
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
          
      
          
                          <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
          
      
          
          
                      
          
                          <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
          
      
          
          
                      
     
  
  
          



</body></html>