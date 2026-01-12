<?php 

function fazerLogin($login, $senha){
    $usuario = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha'");
    if(!empty($usuario)){
        session_start();
        $_SESSION["usuario"] = $usuario;
        return true;
    }
    else{return false;}
}

function verificarLogin(){
    session_start();
    return !empty($_SESSION["usuario"]);
}

?>