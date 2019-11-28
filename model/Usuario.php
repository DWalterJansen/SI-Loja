<?php
class Usuario {
    /** Declaração de Variáveis **/
    private $idUsuario;
    private $login;
    private $senha;
    private $tipo

    /** Declaração das Funções **/
    public function getColumns(){
        return ["idUsuario", "login", "senha", "tipo"];
    }

    public function getAll(){
        return[
            'idUsuario' => $this->idUsuario,
            'login' => $this->login,
            'senha' => $this->senha,
            'tipo' => $this->tipo
        ];
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }
}

$usuario1 = new Usuario();
$usuario1.setIdUsuario(000001);
$usuario1.setLogin("admin");
$usuario1.senha("admin");
$usuario1.setTipo('Admin');

$usuario2 = new Usuario();
$usuario2.setIdUsuario(000002);
$usuario2.setLogin("anne");
$usuario2.senha("anne123");
$usuario2.setTipo('Cliente');

$usuario3 = new Usuario();
$usuario3.setIdUsuario(000003);
$usuario3.setLogin("roberta");
$usuario3.senha("roberta123");
$usuario3.setTipo('Cliente');
?>