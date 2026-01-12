<?php 

function getNutris(){
    $resultado = selectSQL("SELECT * FROM nutricionistas ");
    return $resultado;
}

function getNutrisPagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM nutricionistas ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getNutriHome(){
    $resultado = selectSQL("SELECT * FROM nutricionistas WHERE mostrar_home=1");
    return $resultado;
}

function getTotalPaginas(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT Count(*) FROM nutricionistas");
    return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}

function getNutriEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM nutricionistas WHERE id= $id");
    return $resultado;
}


?>