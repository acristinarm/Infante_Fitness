<?php 

$menu_atual = "parcerias";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM parcerias WHERE id=$id");
}

header("Location: parcerias.php"); 

?>
    
 