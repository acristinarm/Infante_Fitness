<?php 

function getIPeople(){
    $resultado = selectSQL("SELECT * FROM infante_people");
    return $resultado;
} 

function getPeopleHome(){
    $resultado = selectSQL("SELECT * FROM infante_people WHERE mostrar_home=1");
    return $resultado;
}

function getPeopleEspecifica($id){
    $resultado = selectSQLUnico("SELECT * FROM infante_people WHERE id= $id");
    return $resultado;
}
function getPeoplePagina($pagina){
    $elementos_por_pagina = 6;
    $offset = ($pagina -1) * $elementos_por_pagina;
    $resultado = selectSQL("SELECT * FROM infante_people ORDER BY id ASC LIMIT $elementos_por_pagina OFFSET $offset");
    return $resultado;
}

function getTotalPaginasPeople(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT Count(*) FROM infante_people");
    return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}


?>