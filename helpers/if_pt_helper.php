<?php 
function getIF_PT(){
    $resultado = selectSQLUnico("SELECT * FROM if_pt");
    return $resultado;
}

?>