<?php
    require_once '../dao/conta_dao.php';
    require_once '../model/conta.php';

    $numero = $_POST['numero'];
    $idCliente = $_POST['cli'];
  
    var_dump($_POST);

    $conta = new Conta();
    $conta->numero = $numero;
    $conta->abertura = date('Y-m-d');

    $contaDao = new ContaDAO();
    $idConta = $contaDao->salvar($conta);
    $contaDao->associar($idCliente,$idConta);

?>