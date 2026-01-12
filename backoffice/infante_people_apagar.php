<?php 

$menu_atual = "destaques";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM infante_people WHERE id=$id");
}

header("Location: infante_people.php"); 

?>
    
 