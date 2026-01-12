<?php 

$menu_atual = "home";

require_once("requisicoes.php");

$showCarousel = true;
$showContactos = true;

require("componentes/header.php");
require("views/index_view.php");
require("componentes/footer.php");

?>