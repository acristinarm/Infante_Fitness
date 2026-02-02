<?php 

$menu_atual = "testemunhos";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM testemunhos WHERE id=$id");
}

header("Location: testemunhos.php");

?>