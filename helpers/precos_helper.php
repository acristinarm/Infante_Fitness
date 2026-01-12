 <?php 

function getPreco(){
    $resultado = selectSQL("SELECT * FROM precos ");
    return $resultado;
}

function getPrecoPagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM precos ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getTotalPaginasPreco(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT Count(*) FROM precos");
    return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}

function getPrecoEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM precos WHERE id= $id");
    return $resultado;
}


?>