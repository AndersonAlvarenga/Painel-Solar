<?php

function novaConexao($banco = 'dadosarduino') {
    $servidor = 'localhost:3307';
    $usuario = 'root';
    $senha = '';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die('Error: ' . connect_error);
    }
    return $conexao;
}
?>