<?php 

$menu_atual = "centro_ferias";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/centro_f_view.php");
require("componentes/footer.php");

?>