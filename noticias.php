<?php 

$menu_atual = "notícias";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/noticias_view.php");
require("componentes/footer.php");

?>