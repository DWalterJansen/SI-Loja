<?php
require_once(__DIR__."/../model/Banco.php");

    class ItemDao {
        private $con;

        public function __construct() {   
            $this->con = Banco::getInstance()->getConnection();
            echo ' '. $this;
        }

        public function getItensPorVenda($idVenda) {
            $stmt = $this->con->prepare("SELECT * FROM public.item WHERE idVenda = :idVenda");
            $stmt->execute();
            if($result =  $stmt->fetchAll(PDO::FETCH_ASSOC)) {
                return $result;
            }   
            else {
                return FALSE;
            }
        }
		
		public function deletar($p) {
			$sql = "DELETE FROM Item WHERE idVenda = ? And idProduto = ?";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue('1', $p->getIdVenda(), PDO::PARAM_INT);
			$stmt->bindValue('2', $p->getIdProduto(), PDO::PARAM_INT);
			return $stmt->execute();
		}
		
		public function salvar($p){
			$sql = "INSERT INTO Item (idVenda, idProduto, quantidade, precoParcial) VALUES (?,?,?,?,?,?)";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue('1', $p->getIdVenda(), PDO::PARAM_INT);
			$stmt->bindValue('2', $p->getIdProduto(), PDO::PARAM_INT);
			$stmt->bindValue('3', $p->getQuantidade(), PDO::PARAM_INT);
			$stmt->bindValue('4', $p->getPrecoParcial(), PDO::PARAM_STR);
			return $stmt->execute();
		}
		
		public function update($p){
			$sql = "UPDATE Item set quantidade = ?, precoParcial = ? WEHERE idVenda = ? AND idProduto = ? ";
			$stmt = $this->con->prepare($sql);
			$stmt->bindValue('1', $p->getQuantidade(), PDO::PARAM_INT);
			$stmt->bindValue('2', $p->getPrecoParcial(), PDO::PARAM_STR);
			return $stmt->execute();
		}
        
    }
?>