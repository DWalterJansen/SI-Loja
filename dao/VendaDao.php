<?php
require_once(__DIR__."/../model/Banco.php");

class VendaDao {
    private $con;

    public function __construct() {
        $this->con = Banco::getInstance()->getConnection();
    }

    public function salvar($p) {
        $sql = "INSERT INTO Venda (idCliente, formaPagamento, precoTotal) VALUES (?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue('1', $p->getIdCliente(), PDO::PARAM_INT);
        $stmt->bindValue('2', $p->getFormaPagamento(), PDO::PARAM_INT);
        $stmt->bindValue('3', $p->getPrecoTotal(), PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getVendas() {
        $stmt = $this->con->prepare("SELECT * FROM Venda");
        $stmt->execute();
        if($result =  $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            return $result;
        }
        else {
            return FALSE;
        }
    }
    public function deletar($idVenda) {
        $sql = "DELETE FROM Venda WHERE idVenda = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue('1', $idVenda, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function getById($idVenda) {
        $sql = "SELECT * FROM Venda WHERE idVenda = :idVenda";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array('idVenda' => $idVenda));
        if($result =  $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $result;
        }
        else {
            return FALSE;
        }
    }
}
?>
