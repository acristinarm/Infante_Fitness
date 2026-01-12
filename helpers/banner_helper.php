<?php 

function getBanner(){
    $resultado = selectSQL("SELECT * FROM banners");
    return $resultado;
}

function getBannerEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM banners WHERE id='$id'");
    return $resultado;
}

?>