<?php 

$carousel = getCarousel();
$empreendimentos = getEmpreendimentos();
$banner = getBanner();

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFANTE FITNESS</title>
    <link rel="icon" href="uploads/logo_sem_fundo.png" sizes="64x64" type="image/png">

    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JAVASCRIPT -->
    <script src="main.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body onload="scrollAutomatico('<?= $menu_atual; ?>')">

<header class="container-fluid">

    <!-- Menu Desktop -->
    <div class="d-none d-sm-block">
        <div class="container d-flex align-items-center justify-content-between py-3" id="desktop-menu">
            <!-- Left menu -->
            <nav class="d-flex">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "home") ? "active" : ""; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "infante_people") ? "active" : ""; ?>" href="infante_people.php">Infante People</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($menu_atual == "servicos") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown">Serviços</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="preco.php">Preços</a></li>
                            <li><a class="dropdown-item" href="horarios.php">Horários</a></li>
                            <li><a class="dropdown-item" href="inscricao.php">Inscrição</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Logo central -->
            <div class="logo_container text-center">
                <a href="index.php">
                    <img src="uploads/logo_sem_fundo.png" alt="logo" class="logo" style="height: 60px;">
                </a>
            </div>

            <!-- Right menu -->
            <nav class="d-flex">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="empreendimentos.php">Empreendimentos</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "centro_ferias") ? "active" : ""; ?>" href="centro_f.php">Centro de Férias</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="d-block d-sm-none mobile-nav">
        <div class="container py-2">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php">
                    <img src="uploads/logo_sem_fundo.png" alt="logo" class="logo" style="height: 50px;">
                </a>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
                    ☰
                </button>
            </div>
            <div class="collapse" id="mobileMenu">
                <ul class="nav flex-column mt-2">
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "home") ? "active" : ""; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "infante_people") ? "active" : ""; ?>" href="infante_people.php">Infante People</a></li>
                    <li class="nav-item"><a class="nav-link" href="preco.php">Preços</a></li>
                    <li class="nav-item"><a class="nav-link" href="horarios.php">Horários</a></li>
                    <li class="nav-item"><a class="nav-link" href="inscricao.php">Inscrição</a></li>
                    <li class="nav-item"><a class="nav-link" href="empreendimentos.php">Empreendimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="centro_f.php">Centro de Férias</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactos.php">Contactos</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


        <?php if ($showCarousel): ?>
            <!-- Carrossel -->
            <div class="row d-none d-sm-block">
                <div class="col p-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">

                            <?php foreach($carousel as $i => $c): ?>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $i + 1; ?>"></button>

                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-inner">

                            <?php foreach($carousel as $i => $c): ?>

                                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>" data-bs-interval="3000">
                                    <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="...">
                                </div>
                                    
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-block d-sm-none">
                <div class="col p-0" id="carousel_mobile">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="uploads/BannerHome.png" class="d-block w-100" alt="BannerHome.png">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="uploads/BannerContactos_1.png" class="d-block w-100" alt="BannerContactos_1.png">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="uploads/BannerSocios.png" class="d-block w-100" alt="BannerSocios.png">
                            </div>
                        </div>
                    </div>
                </div>
           </div>

        <?php else: ?>
        <!-- Imagens Fixas -->

            <div class="row">
                <div class="col p-0 img_cabecalho">

                    <?php if($menu_atual == "quem_somos"):  ?>

                        <img src="<?= $banner[0]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "socios"): ?>

                        <img src="<?= $banner[1]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "infante_people"): ?>

                        <img src="<?=$banner[2]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "destaques" || $menu_atual == "destaque_especifico"): ?>

                        <img src="<?=$banner[3]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "servicos"): ?>

                        <img src="<?=$banner[4]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "centro_ferias"): ?>

                        <img src="<?=$banner[5]["imagem"]; ?>" alt="">

                    <?php elseif ($menu_atual == "contactos"): ?>

                        <img src="<?=$banner[6]["imagem"]; ?>" alt="">

                    <?php endif; ?>

                </div>
            </div>

        <?php endif; ?>


    </header>

