<?php
require_once(__DIR__."/../model/Banco.php");

    class ProdutoDao {
        private $con;

        public function __construct() {   
            $this->con = Banco::getInstance()->getConnection();
        }

        public function getProduto() {
            $stmt = $this->con->prepare("SELECT * FROM public.produto");
            $stmt->execute();
            if($result =  $stmt->fetchAll(PDO::FETCH_ASSOC)) {
                return $result;
            }   
            else {
                return FALSE;
            }
        }
        
    }
?>