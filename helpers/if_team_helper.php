<?php 
function getIF_TEAM(){
    $resultado = selectSQLUnico("SELECT * FROM if_team");
    return $resultado;
}

?>