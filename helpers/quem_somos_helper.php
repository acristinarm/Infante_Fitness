<?php 

function getQuemSomos(){
    $resultado = selectSQLUnico("SELECT * FROM quem_somos");
    return $resultado;
}

?>