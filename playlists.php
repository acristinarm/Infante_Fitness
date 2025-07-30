<?php 

$menu_atual = "playlists";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/playlists_view.php");
require("componentes/footer.php");

?>