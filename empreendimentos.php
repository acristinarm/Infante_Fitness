<?php 

$menu_atual = "empreendimentos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/empreendimentos_view.php");
require("componentes/footer.php");

?>