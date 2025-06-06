<?php 

$conexao = new PDO("mysql:host=localhost;dbname=construcao_e_habitacao_bd;charset=utf8mb4", "root", "");

function selectSQL($sql){
    global $conexao;
    $pesquisa = $conexao->query($sql);
    $resultado = $pesquisa->fetchALL(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $conexao;
    $pesquisa = $conexao->query($sql);
}

function selectSQLUnico($sql){
    global $conexao;
    $pesquisa = $conexao->query($sql);
    $resultado = $pesquisa->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

?>