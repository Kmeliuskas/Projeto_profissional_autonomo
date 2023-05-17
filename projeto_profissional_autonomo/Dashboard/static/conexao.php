<?php


$server = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'db_profissional_autonomo';

$conexao = mysqli_connect($server,$usuario,$senha,$base);

if($conexao -> error) {
    die("Falha ao conectar ao banco de dados: " . $conexao -> error);
}


?>