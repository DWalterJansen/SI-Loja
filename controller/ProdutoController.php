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
    
    public function getById($idProduto) {
        $result = $this->produtoDao->getById($idProduto);
        return $result;
    }
}

?>