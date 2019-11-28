<?php
class Item {
    /** Declaração de Variáveis **/
    private $idVenda;
    private $idProduto;
    private $quantidade;
    private $precoParcial;

    /** Declaração das Funções **/
    public function getColumns(){
        return ["idVenda", "idProduto", "quantidade", "precoParcial"];
    }

    public function getAll(){
        return[
            'idVenda' => $this->idVenda,
            'idProduto' => $this->idProduto,
            'quantidade' => $this->quantidade,
            'precoParcial' => $this->precoParcial
        ];
    }

    public function setIdVenda($idVenda){
        $this->idVenda = $idVenda;
    }

    public function getIdVenda(){
        return $this->idVenda;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setPrecoParcial($precoParcial){
        $this->precoParcial = $precoParcial;
    }

    public function getPrecoParcial(){
        return $this->precoParcial;
    }
}
?>