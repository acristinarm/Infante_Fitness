<?php 

$menu_atual = "testemunhos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/testemunhos_view.php");
require("componentes/footer.php");

?>