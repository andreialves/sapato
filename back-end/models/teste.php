<?php
    include("cliente.php");
    $cliente = new Cliente();

    $telefone = new Telefone();
    $telefone->setTelefone("12365478912");
    $cliente->setTelefone($telefone);
    $telefone = new Telefone();
    $telefone->setTelefone("32365478912");
    $cliente->setTelefone($telefone);

    $cliente->insereTelefone();

    var_dump($cliente);


?>