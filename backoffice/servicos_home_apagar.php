<?php 

$menu_atual = "servicos_home";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM servicos WHERE id=$id");
}

header("Location: servicos_home.php");

?>