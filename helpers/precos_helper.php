 <?php 

function getPreco(){
    $resultado = selectSQL("SELECT * FROM precos ");
    return $resultado;
}

function getPrecoEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM precos WHERE id= $id");
    return $resultado;
}


?>