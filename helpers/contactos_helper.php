<?php 

function getContactos(){
    $resultado = selectSQLUnico("SELECT * FROM contactos");
    return $resultado;
}

?>