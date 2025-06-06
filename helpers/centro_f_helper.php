<?php
function getCentroFerias(){
    $resultado = selectSQLUnico("SELECT * FROM centro_ferias WHERE id=1");
    return $resultado;
}

?>