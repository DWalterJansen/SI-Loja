<?php
class Produto {
    /** Declaração de Variáveis **/
    private $idProduto;
    private $Nome;
	private $quantidadeEstoque;
    private $precoUnitario;
    /** Declaração das Funções **/
    public function getColumns(){
        return ["idProduto", "Nome", "quantidadeEstoque", "precoUnitario"];
    }
    
    public function getAll(){
        return[
            'idProduto' => $this->idProduto,
			'Nome' => $this->Nome,
			'quantidadeEstoque' => $this->quantidadeEstoque,
            'precoUnitario' => $this->precoUnitario
        ];
    }

    public function setAll($data){
        $this->Nome = $data['Nome'];
        $this->quantidadeEstoque = $data['quantidadeEstoque'];
        $this->precoUnitario = $data['precoUnitario'];
    }
    
    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }
    public function getIdProduto(){
        return $this->idProduto;
    }
	public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function setQuantidadeEstoque($quantidadeEstoque){
        $this->quantidadeEstoque = $quantidadeEstoque;
    }
    public function getQuantidadeEstoque(){
        return $this->quantidadeEstoque;
    }
	public function setPrecoUnitario($precoUnitario){
        $this->precoUnitario = $precoUnitario;
    }
    public function getPrecoUnitario(){
        return $this->precoUnitario;
    }
}
?>