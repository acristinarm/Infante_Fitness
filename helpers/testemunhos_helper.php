<?php 

function getTestemunhos(){
    $resultado = selectSQL("SELECT * FROM testemunhos");
    return $resultado;
}


function getTestemunhoEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM testemunhos WHERE id= $id");
    return $resultado;
}

?>