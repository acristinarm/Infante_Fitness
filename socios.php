<?php 

$menu_atual = "socios";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/socios_view.php");
require("componentes/footer.php");

?>