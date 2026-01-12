<?php

function getParcerias(){
    $resultado = selectSQL("SELECT * FROM parcerias");
    return $resultado;
} 

function getParceriaEspecifica($id){
    $resultado = selectSQLUnico("SELECT * FROM parcerias WHERE id= $id");
    return $resultado;
}


function getParceriasPagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM parcerias ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getTotalPaginasParcerias(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT Count(*) FROM parcerias");
    return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}

?>