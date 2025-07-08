<?php 

$menu_atual = "nutricionistas";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM nutricionistas WHERE id=$id");
}

header("Location: nutricionistas.php");

?>
    
