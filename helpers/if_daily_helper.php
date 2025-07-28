<?php 
function getIF_DAILY(){
    $resultado = selectSQLUnico("SELECT * FROM if_daily");
    return $resultado;
}

?>