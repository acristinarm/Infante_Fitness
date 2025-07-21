<?php 
function getContactos(){
    $resultado = selectSQLUnico("SELECT * FROM contactos");

    // Limpa tags HTML apenas do campo instagram (e podes fazer o mesmo para outros campos se quiseres)
    if (isset($resultado['link_instagram'])) {
        $resultado['link_instagram'] = strip_tags($resultado['link_instagram']);
    }

    return $resultado;
}

?>