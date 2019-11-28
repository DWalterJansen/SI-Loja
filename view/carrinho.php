<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>MiniappLoja | Meu Carrinho</title>
        
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
        <div id="wpf-loader-two">          
            <div class="wpf-loader-two-inner">
                <span>Carregando</span>
            </div>
        </div> 
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
                                        <li class="hidden-xs"><a href="carrinho.php">Meu Carrinho</a></li>
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

        <!-- Banner da Seção  -->
        <section id="aa-catg-head-banner">
            <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Meu Carrinho</h2>
                        <ol class="breadcrumb">
                            <li><a href="paginainicial.php">Página Inicial</a></li>                   
                            <li class="active">Meu Carrinho</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner da Seção -->
        <!-- /Partes que são Padrão para todas as Páginas -->

        <!-- Seção Destinada a Mostrar os Dados do Carrinho do Usuário -->
        <section id="carrinho-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carrinho-view-area">
                            <div class="carrinho-view-table">
                                <!-- Mostrando os dados dos produtos -->
                                <form action="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Nome Produto</th>
                                            <th>Preço</th>
                                            <th>Quantidade</th>
                                            <th>Preço Parcial</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                                <td><a href="#"><img src="img/man/polo-shirt-1.png" alt="img"></a></td>
                                                <td><a class="aa-carrinho-titulo" href="#">Camisa Social</a></td>
                                                <td>R$250</td>
                                                <td><input class="aa-carrinho-quantidade" type="number" value="1"></td>
                                                <td>R$250</td>
                                            </tr>
                                            <tr>
                                                <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                                <td><a href="#"><img src="img/man/polo-shirt-2.png" alt="img"></a></td>
                                                <td><a class="aa-carrinho-titulo" href="#">Camisa Polo</a></td>
                                                <td>R$150</td>
                                                <td><input class="aa-carrinho-quantidade" type="number" value="1"></td>
                                                <td>R$150</td>
                                            </tr>
                                            <tr>
                                                <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                                <td><a href="#"><img src="img/man/polo-shirt-3.png" alt="img"></a></td>
                                                <td><a class="aa-carrinho-titulo" href="#">Regata</a></td>
                                                <td>R$50</td>
                                                <td><input class="aa-carrinho-quantidade" type="number" value="1"></td>
                                                <td>R$50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="aa-carrinho-view-bottom">
                                                <div class="aa-carrinho-coupon">
                                                    <input class="aa-coupon-code" type="text" placeholder="Cupom">
                                                    <input class="aa-carrinho-view-btn" type="submit" value="Aplicar Cupom" id="carrinho_aplicar" name="carrinho_aplicar">
                                                </div>
                                                <input class="aa-carrinho-view-btn" type="submit" value="Atualizar Valor" id="carrinho_atualizar" name="carrinho_atualizar">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </form>
                                <!-- /Mostrando os dados dos produtos -->
                                <!-- Mostrando o valor da compra -->
                                <div class="carrinho-view-total">
                                    <h4>Valor Total do Carrinho</h4>
                                    <table class="aa-totals-table">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$450</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>$450</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="pagamento.php" class="aa-carrinho-view-btn" id="carrinho_finalizar" name="carrinho_finalizar">Finalizar Compra</a>
                                </div>
                                <!-- /Mostrando o valor da compra -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Seção Destinada a Mostrar os Dados do Carrinho do Usuário -->

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
        <!-- /Partes que são Padrão para todas as Páginas -->
    </body>
</html>