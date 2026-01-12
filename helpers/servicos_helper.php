<?php 

function getServicos(){
    $resultado = selectSQL("SELECT * FROM servicos ");
    return $resultado;
}


function getServicoPagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM servicos ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getServicoEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM servicos WHERE id= $id");
    return $resultado;
}

?>