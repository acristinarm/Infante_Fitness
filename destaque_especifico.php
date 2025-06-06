<?php 

$menu_atual = "destaque_especifico";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/destaque_especifico_view.php");
require("componentes/footer.php");

?>