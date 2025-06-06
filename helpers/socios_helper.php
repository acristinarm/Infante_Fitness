<?php 

function getSocios(){
    $resultado = selectSQLUnico("SELECT * FROM socios");
    return $resultado;
}

?>