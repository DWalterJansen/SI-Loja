<?php
    require_once(__DIR__."/../controller/VendaController.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>MiniappLoja | Listar Vendas</title>
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

        <!-- Adicionando os arquivo de estilos -->
        <!-- Incluindo o Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.css">

        <!-- Incluindo o Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Incluindo o SmartMenus jQuery Bootstrap Addon CSS -->
        <link rel="stylesheet" href="css/jquery.smartmenus.bootstrap.css">

        <!-- Incluindo o Product view slider -->
        <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">

        <!-- Incluindo o slick slider -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">

        <!-- Incluindo o price picker slider -->
        <link rel="stylesheet" type="text/css" href="css/nouislider.css">

        <!-- Incluindo o Theme color -->
        <link id="switcher"  rel="stylesheet" href="css/theme-color/lite-blue-theme.css">

        <!-- Incluindo o Top Slider CSS -->
        <link rel="stylesheet" href="css/sequence-theme.modern-slide-in.css" media="all">

        <!-- Adicionando a página de estilos css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Adicionando as fontes do Google -->
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato' type='text/css'>
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Raleway' type='text/css'>
    </head>
    <body>
        <!-- Partes que são Padrão para todas as Páginas -->
        <!-- Carregando a Página  -->
        <!--div id="wpf-loader-two">
            <div class="wpf-loader-two-inner">
                <span>Carregando</span>
            </div>
        </div-->
        <!-- /Carregando a Página -->
        <!--  Botão de Rolagem do Topo -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Botão de Rolagem do Topo -->

        <!-- Seção Destinada ao Header da Página -->
        <header id="aa-header">
            <!-- Div Destinada ao topo da Header -->
            <div class="aa-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-header-top-area">
                                <!-- Div Destinada ao lado Esquerdo do Topo da Header-->
                                <div class="aa-header-top-left">
                                    <!-- Definindo o Idioma da Página -->
                                    <div class="aa-idioma">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
                                                <img src="img/flag/BR.png" alt="portugues flag">Português (PT - BR)
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu"  aria-labelledby="dropdownMenu1">
                                                <li><a href="#"><img src="img/flag/BR.png" alt="" width="13px" height="9px">Português</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Definindo o Idioma da Página -->
                                    <!-- Definindo a Moeda a ser Utilizada-->
                                    <div class="aa-moeda">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                R<i class="fa fa-usd"></i>Real
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">R<i class="fa fa-usd"></i>Real</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Definindo a Moeda a ser Utilizada -->
                                    <!-- Defindo o Telefone para contato -->
                                    <div class="telefone hidden-xs">
                                       <p><span class="fa fa-phone"></span>(00) 0000-0000</p>
                                    </div>
                                    <!-- /Defindo o Telefone para contato -->
                                </div>
                                <!-- /Div Destinada ao lado Esquerdo do Topo da Header -->
                                <!-- Div Destinada ao lado Direito do Topo da Header-->
                                <div class="aa-header-top-right">
                                    <ul class="aa-head-top-nav-right">
                                        <!-- <li class="hidden-xs"><a href="carrinho.php">Meu Carrinho</a></li> -->
                                        <li class="hidden-xs"><a href="login.php">Entrar</a></li>
                                    </ul>
                                </div>
                                <!-- /Div Destinada ao lado Direito do Topo da Header -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Div Destinada ao topo da Header -->
            <!-- Div Destinada a parte Inferior da Header -->
            <div class="aa-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-header-bottom-area">
                                <!-- Inserindo a logo  -->
                                <div class="aa-logo">
                                    <!-- Text based logo -->
                                    <a href="paginainicial.php">
                                        <span class="fa fa-shopping-cart"></span>
                                        <p>Miniapp<strong>Shop</strong> <span>Trabalho Final SI - 2019</span></p>
                                    </a>
                                </div>
                                <!-- /Inserindo a logo  -->
                                <!-- Div Destinada ao Box da Busca -->
                                <div class="aa-busca-box">
                                    <form action="">
                                        <input type="text" name="" id="" placeholder="O que está procurando? ">
                                        <button type="submit"><span class="fa fa-search"></span></button>
                                    </form>
                                </div>
                                <!-- /Div Destinada ao Box da Busca -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Div Destinada a parte Inferior da Header -->
        </header>
        <!-- /Seção Destinada ao Header da Página -->

        <!-- Seção Destinada ao Menu -->
        <section id="menu">
            <div class="container">
                <div class="menu-area">
                    <!-- Navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- /Navbar -->
                        <!-- Nav Collapse -->
                        <div class="navbar-collapse collapse">
                            <!-- Nav Esquerda -->
                            <ul class="nav navbar-nav">
                                <li><a href="paginainicial.php">Página Inicial</a></li>
                            </ul>
                            <!-- /Nav Esquerda -->
                        </div>
                        <!-- /Navbar Collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Seção Destinada ao Menu -->
        <!-- /Partes que são Padrão para todas as Páginas -->

        <!-- Criando um objeto do tipo ProdutoController -->
        <!--?php $produto = $produtoController->getById($_GET['idProduto']); ?-->
		    <!--?php $vendas = new VendaController(); ?-->

        <!-- Seção Destinada a Listagem de Vendas -->
        <section id="listvenda-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="listvenda-view-area">
                            <div class="listvenda-view-table">
                                <!-- Mostrando os dados dos produtos -->
                                <form action="">
                                    <div class="table-responsive">
                                      <table id="dt_user" class="table table-bordered table-hover" cellspacing="0" width="100%">
                              					<thead>
                              						<tr>
                              							<th>Id Venda</th>
                              							<th>Id Cliente</th>
                              							<th>Preço Total</th>
                              							<th>Forma de Pagamento</th>
                              							<th></th>
                              						</tr>
                              					</thead>
                              				</table>
                                        <!--table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID da Venda</th>
                                                    <th>ID do Cliente</th>
                                                    <th>Preço Total</th>
                                                    <th>Forma de Pagamento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--?php $vendas->listar(); ?-->
                                                <!--<tr>
                                                    <td>000001</td>
                                                    <td>000325</td>
                                                    <td>Cartão de Crédito</td>
                                                    <td>17/11/2019</td>
                                                    <td>R$250</td>
                                                </tr>-->

                                            <!--<tr>
                                                    <td colspan="6" class="aa-listvenda-view-bottom">
                                                        <a href="pesquisarvendas.php" class="aa-listvenda-view-btn" id="listvenda_pesquisar" name="listvenda_pesquisar">Pesquisar Vendas</a>
                                                    </td>
                                                </tr>-->
                                        <!--/table-->

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Seção Destinada a Listagem de Vendas -->

        <!-- Partes que são Padrão para todas as Páginas -->
        <!-- Seção Destinada ao Footer da Página  -->
        <footer id="aa-footer">
            <!-- Div Destinada a parte Inferior do Footer -->
            <div class="aa-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-footer-bottom-area">
                                <p>Design Original por <a href="http://www.markups.io/">MarkUps.io</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Div Destinada a parte Inferior do Footer -->
        </footer>
        <!-- /Seção Destinada ao Footer da Página -->
        <!-- Biblioteca jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
        <!-- To Slider JS -->
        <script src="js/sequence.js"></script>
        <script src="js/sequence-theme.modern-slide-in.js"></script>
        <!-- Product view slider -->
        <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
        <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="js/slick.js"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="js/nouislider.js"></script>
        <!-- Custom js -->
        <script src="js/custom.js"></script>
        <!-- /Biblioteca jQuery -->

      	<script src="js/bootstrap.min.js"></script>
      	<script src="js/jquery.dataTables.min.js"></script>
      	<script src="js/dataTables.bootstrap.js"></script>
      	<!--botones DataTables-->
      	<script src="js/dataTables.buttons.min.js"></script>
      	<script src="js/buttons.bootstrap.min.js"></script>
        <!-- /Partes que são Padrão para todas as Páginas -->
        <script type="text/javascript" language="javascript">
      		$(document).ready(function() {
      			listar();
      		} );
          var idioma_pt_br = {
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ ate _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 ate 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por pagina",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                "sNext": "Proximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Ultimo"
              },
              "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
              },
              "select": {
                "rows": {
                  "_": "Selecionado %d linhas",
                  "0": "Nenhuma linha selecionada",
                  "1": "Selecionado 1 linha"
                }
              }
          }
      		var listar = function() {
            var table = $('#dt_user').DataTable({
      					"destroy" : true,
      					"ajax": {
      						"url": "vendasJson.php",
      						"method": "POST",
      						"dataSrc" : function(data){
      							if (data.length == 0){
      								return [];
      							}
      							else{
      								return data.data;
      							}
      						}
      					},
      					"columns" : [
      						{"data" : "idvenda"},
      						{"data" : "idcliente"},
      						{"data" : "precototal"},
      						{"data" : "formapagamento"}
      					],
      					"language" : idioma_pt_br
      			});
      		}
      	</script>
    </body>
</html>
