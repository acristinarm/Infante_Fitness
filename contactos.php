<?php 

$menu_atual = "contactos";

require("requisicoes.php");

$showCarousel = false;
$showContactos = false;

require("componentes/header.php");
require("views/contactos_view.php");
require("componentes/footer.php");

?>