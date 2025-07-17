<?php 

$menu_atual = "precos";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM precos WHERE id=$id");
}

header("Location: precos.php");

?>