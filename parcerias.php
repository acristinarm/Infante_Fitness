<?php 

$menu_atual = "parcerias";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/parcerias_view.php");
require("componentes/footer.php");

?>