<?php
class Venda {
    /** Declaração de Variáveis **/
    private $idVenda;
    private $idCliente;
    private $formaPagamento;
    private $precoTotal;

    /** Declaração das Funções **/
    public function getColumns(){
        return ["idVenda", "idCliente", "formaPagamento", "precoTotal"];
    }

    public function getAll(){
        return[
            'idVenda' => $this->idVenda,
            'idCliente' => $this->idCliente,
            'formaPagamento' => $this->formaPagamento,
            'precoTotal' => $this->precoTotal
        ];
    }

    public function setIdVenda($idVenda){
        $this->idVenda = $idVenda;
    }

    public function getIdVenda(){
        return $this->idVenda;
    }

    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setFormaPagamento($formaPagamento){
        $this->formaPagamento = $formaPagamento;
    }

    public function getFormaPagamento(){
        return $this->formaPagamento;
    }

    public function setPrecoTotal($precoTotal){
        $this->precoTotal = $precoTotal;
    }

    public function getPrecoTotal(){
        return $this->precoTotal;
    }
}
?>