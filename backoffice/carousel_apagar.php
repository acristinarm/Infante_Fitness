<?php 

$menu_atual = "carousel";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM carousel WHERE id=$id");
}

header("Location: carousel.php");

?>
    
