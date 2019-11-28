<?php
$path = realpath('.');
require_once(__DIR__."/../dao/VendaDao.php");
require_once(__DIR__."/../model/Venda.php");

class VendaController {
    private $vendaDao;
    public function __construct() {
        $this->vendaDao = new VendaDao();
    }

    public function listar() {
        $row = $this->vendaDao->getVendas();
        if($row == FALSE) {
            echo "Nenhum dado foi encontrado";
        }
        else {
            foreach ($row as $value){
                echo "<tr>";
                echo "<td>".$value['idvenda'] ."</td>";
                echo "<td>".$value['idcliente'] ."</td>";
                echo "<td>".$value['precototal'] ."</td>";
                echo "<td>".$value['formapagamento'] ."</td>";
                /*echo "<td>
                        <a href='editar.php?codigo=".$value['codigo']."'><img src='media/images/edit_pencil.png' height='24'/></a>
                        <a class='remove'  data-codigo=".$value['codigo']."><img src='media/images/delete.png' height='20'/></a></td>";
                */echo "</tr>";
            }
        }
    }

    public function listarJason() {
        $row = $this->vendaDao->getVendas();
        if($row == FALSE) {
            echo "Nenhum dado foi encontrado";
        }
        else {
          $dados = [];
        	foreach ($row as $value){
        		$dados["data"][] = array_map("utf8_encode", $value);
        	}
        	return json_encode($dados);
        }
    }

    /*public function salvar() {
        $venda = new Venda();
        $venda->setAll($_POST);
        if($this->vendaDao->salvar($venda)) {
            echo "<script>alert('venda incluído com sucesso!');document.location='../cadastrar.php'</script>";
        } else{
            echo "<script>alert('Erro ao gravar venda!');history.back()</script>";
        }
    }

    public function deletar($codigo) {
        if($this->vendaDao->deletar($codigo)) {
            $response_array['status'] = 'sucess';
        }
        else {
            $response_array['status'] = 'error';
        }
        header('Content-type: application/json');
        echo json_encode($response_array);
    }
    public function getById($codigo) {
        $result = $this->vendaDao->getById($codigo);
        return $result;
    }
    public function update() {
        $venda = new Compra();
        $venda->setCodigo($_POST['codigo']);
        $venda->setNome($_POST['nome']);
        $venda->setFornecedor($_POST['fornecedor']);
        $venda->setValor($_POST['valor']);
        $venda->setQuantidade($_POST['quantidade']);
        if($this->vendaDao->update($venda)) {
            session_start();
            $_SESSION['msg'] = "sucesso";
            echo "<script>document.location='../index.php'</script>";
        }else{
            session_start();
            $_SESSION['msg'] = "erro";
            echo "<script>alert('Erro ao atualizar venda!');history.back()</script>";
        }

    }*/

}
/*$vendaController = new vendaController();
if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $vendaController->salvar();
}
else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $vendaController->update();
}
else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $codigo = $_GET["codigo"];
    $vendaController->deletar($codigo);
}*/
?>
