<?php
require_once(__DIR__."/../controller/VendaController.php");
$vendas = new VendaController();
echo $vendas->listarJason();
?>
