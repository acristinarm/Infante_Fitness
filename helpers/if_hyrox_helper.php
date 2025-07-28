<?php 
function getIF_HYROX(){
    $resultado = selectSQLUnico("SELECT * FROM if_hyrox");
    return $resultado;
}

?>