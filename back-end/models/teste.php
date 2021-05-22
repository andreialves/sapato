<?php

    include('cliente.php');

    $cliente = new Cliente();

    $cliente->setNome("Andrei");
    $cliente->setSexo("M");
    $cliente->setEmail("andrei@teste.com");
    $cliente->setCpf("02321546871");
    $cliente->setSenha("123456");
    
    $endereco = new Endereco();
    $endereco->setRua("R");
    $endereco->setCidade("BH");
    $endereco->setCep("30493180");
    $endereco->setEstado("MG");
    $endereco->setComplemento("Apto");
    $endereco->setBairro("Centro");
    $endereco->setNumero("85");
    $cliente->insere();
    $cliente->setEnderecoPrincipal($endereco);

    $cliente->insereEnderecoPrincipal();

?>