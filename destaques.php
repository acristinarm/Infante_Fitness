<?php 

$menu_atual = "destaques";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/destaques_view.php");
require("componentes/footer.php");

?>