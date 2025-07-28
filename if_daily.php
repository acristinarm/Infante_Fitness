<?php 

$menu_atual = "workouts";

require("requisicoes.php");

$showCarousel = false;
$showContactos = true;

require("componentes/header.php");
require("views/if_daily_view.php");
require("componentes/footer.php");

?>