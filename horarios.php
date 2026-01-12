<?php 

$menu_atual = "servicos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/horarios_view.php");
require("componentes/footer.php");

?>