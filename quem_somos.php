<?php 

$menu_atual = "quem_somos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/quem_somos_view.php");
require("componentes/footer.php");

?>