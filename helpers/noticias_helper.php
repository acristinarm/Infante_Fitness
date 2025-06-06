<?php 

function getNoticias(){
    $resultado = selectSQL("SELECT * FROM noticias");
    return $resultado;
}

function getNoticiasEspecificas($id){
    $resultado = selectSQLUnico("SELECT * FROM noticias WHERE id= $id");
    return $resultado;
}
function getNoticiasPagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM noticias ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getTotalPaginasNoticias(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT Count(*) FROM noticias");
    return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}


?>