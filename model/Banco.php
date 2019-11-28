<?php
require_once(__DIR__."/../init.php");

class Banco
{
    private static $_instance;
    private $_connection;
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __construct()
    {
        try {
            $this->_connection = new PDO(DNS, BD_USUARIO, BD_SENHA);
            echo "Conexão Bem Sucessida";
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    private function clone()
    { }
    public function getConnection()
    {
        return $this->_connection;
    }
}
?>