<?php

$cof_conexao = 'host=localhost port=5432 dbname=sapatobd user=dbuser password=INF321@dmin';
$conexao = pg_connect($cof_conexao);

$query = "SELECT * FROM ADMINISTRADOR;";

$query2 = "INSERT INTO ADMINISTRADOR (usuario, senha) VALUES ('administrador', 'senha')";


$resultado = pg_query($conexao, $query);

$nColunas = pg_fetch_all($resultado, PGSQL_ASSOC);

foreach($nColunas as $value){
    echo $value['idadministrador']."<br>";
    echo $value['usuario']."<br>";
}

echo pg_num_rows($resultado);


var_dump($nColunas);

?>