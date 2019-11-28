<?php
$path = realpath('.');
require_once(__DIR__."/../dao/ProdutoDao.php");
require_once(__DIR__."/../model/Produto.php");

class ProdutoController {
    private $produtoDao;
    public function __construct() {
        $this->produtoDao = new ProdutoDao();
    }

    public function listar() {
        $row = $this->produtoDao->getProduto();
        if($row == FALSE) {
            echo "Nenhum dado foi encontrado";
        }
        else {
            foreach ($row as $value){
                echo "<tr>";
                    echo "<td>"."{$value['idproduto']}" ."</td>";
                    echo "<td>".$value['nome'] ."</td>";
                    echo "<td>"."{$value['quantidadeestoque']}" ."</td>";
                    echo "<td>"."{$value['precounitario']}" ."</td>";
                echo "</tr>";
            }
        }
    }

    public function listar0() {
        $row = $this->produtoDao->getProduto();
        if($row == FALSE) {
            echo "Nenhum dado foi encontrado";
        }
        else {
            foreach ($row as $value){
              $extesao = ".png";
              $imagem = "../bancoimagens/".$value['nome'].$extesao;
              ?>
                <li>
                  <figure>
                  <a class="aa-produto-img" href=""><style>
                  </style><img style="width: 250px; height: 300px;" src="<?php echo $imagem; ?>"  alt="polo shirt img"></a>

                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                    <h4 class="aa-produto-titulo"><a href="#"><?php echo $value['nome']; ?></a></h4>
                    <span class="aa-produto-preco"><?php echo $value['precounitario'] ?></span>
                    </figcaption>
                </figure>
              </li>
              <?php
            }
        }
    }

    public function getById($idProduto) {
        $result = $this->produtoDao->getById($idProduto);
        return $result;
    }
}

/*
//</style><img style="width: 250px; height: 300px;" src=<?php echo $imagem;  alt="polo shirt img"></a>
$extesao = ".png";
$imagem = "../bancoimagens/".$value['nome'].$extesao;
echo $imagem;
</style><img style="width: 250px; height: 300px;" src= alt="polo shirt img"></a>
?>*/
?>
