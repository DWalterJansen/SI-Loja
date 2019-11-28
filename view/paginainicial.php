<?php
    require_once(__DIR__."/../controller/ProdutoController.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>MiniappLoja | Página Inicial</title>

        <!-- Adicionando os arquivo de estilos -->
        <!-- Incluindo o Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.css">

        <!-- Incluindo o Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Incluindo o SmartMenus jQuery Bootstrap Addon CSS -->
        <link rel="stylesheet" href="css/jquery.smartmenus.bootstrap.css">

        <!-- Incluindo o Produto view slider -->
        <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">

        <!-- Incluindo o slick slider -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">

        <!-- Incluindo o preco picker slider -->
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
        <!-- C0arregando a Página
        <div id="wpf-loader-two">
            <div class="wpf-loader-two-inner">
                <span>Carregando</span>
            </div>
        </div>-->
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
                                        <li class="hidden-xs"><a href="carrinho.php">Carrinho</a></li>
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
                                <!-- Div Destinada ao Box do Carrinho -->
                                <div class="aa-carrinhobox">
                                    <a class="aa-carrinho-link" href="carrinho.php">
                                        <span class="fa fa-shopping-basket"></span>
                                        <span class="aa-carrinho-titulo">Meu Carrinho</span>
                                        <span class="aa-carrinho-notificacao">0</span>
                                    </a>
                                    <div class="aa-carrinhobox-sumario">
                                        <ul>
                                            <li>
                                                <a class="aa-carrinhobox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                                                <div class="aa-carrinhobox-info">
                                                    <h4><a href="#">Nome do Produto</a></h4>
                                                    <p>1 x R$250</p>
                                                </div>
                                                <a class="aa-remove-produto" href="#"><span class="fa fa-times"></span></a>
                                            </li>
                                            <li>
                                                <a class="aa-carrinhobox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                                                <div class="aa-carrinhobox-info">
                                                    <h4><a href="#">Nome do Produto</a></h4>
                                                    <p>1 x R$250</p>
                                                </div>
                                                <a class="aa-remove-produto" href="#"><span class="fa fa-times"></span></a>
                                            </li>
                                            <li>
                                                <span class="aa-carrinhobox-total-titulo">
                                                    Preço Total
                                                </span>
                                                <span class="aa-carrinhobox-total-preco">
                                                    R$500
                                                </span>
                                            </li>
                                        </ul>
                                    <a class="aa-carrinhobox-pagamento aa-primary-btn" href="#">Finalizar Compra</a>
                                    </div>
                                </div>
                                <!-- /Div Destinada ao Box do Carrinho -->
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

        <!-- Seção Destinada A mostrar os produtos -->
        <section id="aa-produto">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="aa-produto-area">
                    <div class="aa-produto-inner">
                        <!-- Tab panes -->
                        <?php $produtos = new ProdutoController(); ?>
                        <div class="tab-content">
                            <!-- Start men produto category -->
                            <div class="tab-pane fade in active" id="men">
                              <ul class="aa-produto-catg">
                                <?php $produtos->listar0(); ?>
                              <!-- / electronic produto category -->
                              </ul>
                            </div>
                        </div>
                        <!-- quick view modal
                        <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <div class="row">
                                    <!-- Modal view slider
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="aa-produto-view-slider">
                                        <div class="simpleLens-gallery-container" id="demo-1">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                    <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                            </a>
                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                            </a>

                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Modal view content
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="aa-produto-view-content">
                                        <h3>T-Shirt</h3>
                                        <div class="aa-preco-block">
                                        <span class="aa-produto-view-preco">$34.99</span>
                                        <p class="aa-produto-avilability">Avilability: <span>In stock</span></p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                        <h4>Size</h4>
                                        <div class="aa-prod-view-size">
                                        <a href="#">S</a>
                                        <a href="#">M</a>
                                        <a href="#">L</a>
                                        <a href="#">XL</a>
                                        </div>
                                        <div class="aa-prod-quantity">
                                        <form action="">
                                            <select name="" id="">
                                            <option value="0" selected="1">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>
                                            <option value="5">6</option>
                                            </select>
                                        </form>
                                        <p class="aa-prod-category">
                                            Category: <a href="#">Polo T-Shirt</a>
                                        </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                        <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div><!-- /.modal-content
                            </div><!-- /.modal-dialog
                        </div><!-- / quick view modal -->
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- /Seção Destinada A mostrar os produtos -->

        <!-- Banner da Seção
        <section id="aa-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-banner-area">
                                <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner da Seção -->

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
            <!-- Produto view slider -->
            <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
            <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
            <!-- slick slider -->
            <script type="text/javascript" src="js/slick.js"></script>
            <!-- Preco picker slider -->
            <script type="text/javascript" src="js/nouislider.js"></script>
            <!-- Custom js -->
            <script src="js/custom.js"></script>
            <!-- /Biblioteca jQuery -->
            <!-- /Partes que são Padrão para todas as Páginas -->
        </body>
    </html>
