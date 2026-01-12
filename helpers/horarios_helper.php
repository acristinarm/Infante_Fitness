<?php 

function getHorarios(){
    $resultado = selectSQLUnico("SELECT * FROM horarios");
    return $resultado;
}

?>