<?php 

ob_start();
if(!verificarLogin()){
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style_backoffice.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JS TINYMCE (EDITOR TEXTO) -->
    <script src="https://cdn.tiny.cloud/1/cxcasgrsau34b9mwptjxh6nebdr2m9egf4d345kcbr2qk545/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

    <header class="container-fluid">

        <div class="row">
            <div class="col-12 p-0">
                <nav class="navbar navbar-expand-lg bg-info-subtle">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">BACKOFFICE</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "home") ? "active" : ""; ?>" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "carousel") ? "active" : ""; ?>" href="carousel.php">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "banners") ? "active" : ""; ?>" href="banners.php">Banners</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= ($menu_atual == "quem_somos" || $menu_atual == "socios" || $menu_atual == "centro_ferias") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Menus Simples
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="quem_somos.php">Quem Somos</a></li>
                                        <li><a class="dropdown-item" href="socios.php">Sócios</a></li>
                                        <li><a class="dropdown-item" href="centro_ferias.php">Centro de Férias</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "destaques") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="empreendimentos.php">Empreendimentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>
