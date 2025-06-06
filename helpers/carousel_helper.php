<?php 

function getCarousel(){
    $resultado = selectSQL("SELECT * FROM carousel");
    return $resultado;
}

function getCarouselEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
    return $resultado;
}



?>