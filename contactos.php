<?php 

$menu_atual = "contactos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/contactos_view.php");
require("componentes/footer.php");

?>