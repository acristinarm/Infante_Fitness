<?php 

$menu_atual = "empreendimentos";

require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if ($form) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM empreendimentos WHERE id=$id");
}

header("Location: empreendimentos.php");

?>