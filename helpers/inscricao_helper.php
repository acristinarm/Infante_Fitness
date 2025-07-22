<?php 

function getInscricao(){
    $resultado = selectSQLUnico("SELECT * FROM inscricao");
    return $resultado;
}

?>