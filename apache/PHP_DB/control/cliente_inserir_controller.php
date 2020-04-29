<?php
    require_once '../dao/cliente_dao.php';
    require_once '../model/cliente.php';

    $nome = $_POST['nome'];
    $fone = $_POST['fone'];


    $cliente = new Cliente();
    $cliente->nome = $nome;
    $cliente->telefone = $fone;

    $dao = new ClienteDAO();
    $dao->salvar($cliente);
?>