<?php 

//$conexao = new PDO("mysql:host=localhost;dbname=u351966643_inFitness;charset=utf8mb4", "u351966643_pedro", "Infante_Fitness_2021");
$conexao = new PDO("mysql:host=localhost;dbname=infante_fitness_bd;charset=utf8mb4", "root", "");

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