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

    <style>
    #typing {
        width: 100%;
        font-family: monospace;
        font-size: 2rem;
        white-space: nowrap;
        overflow: hidden;
        border-right: 2px solid black; /* cursor */
        box-sizing: border-box;
    }

    @keyframes blink-caret {
        50% { border-color: transparent; }
        100% { border-color: black; }
    }

    #typing {
        animation: blink-caret 0.75s step-end infinite;
    }
    </style>

</head>

<body onload="scrollAutomatico('<?= $menu_atual; ?>')">

    <header class="container-fluid">
        <div class="row d-none d-sm-block">
            <div class="col p-0 m-0">
                <nav class="navbar_desktop navbar px-5 navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand"><img id="logo" src="uploads/logo_sem_fundo.png" alt="logo.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-end align-items-end" id="navbarSupportedContent">
                            <ul class="navbar-nav pt-4">
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                                </li>
<!--                                 <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                                </li>
 -->                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "infante_people") ? "active" : ""; ?>" href="infante_people.php">Infante People</a>
                                </li>
<!--                                 <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "nutricionistas" || $menu_atual == "nutricionistas_especifico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                </li>
 -->                                <li class="nav-item dropdown">
                                    <a class="nav-link px-0 <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="empreendimentos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="link_empreendimentos">
                                        Serviços
                                    </a>
                                    <ul class="dropdown-menu" id="menu_desktop">
                                        <?php foreach($empreendimentos as $i => $e): ?>
                                            <li><a class="dropdown-item" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["título"]; ?></a></li>
                                            <?php if($i < count($empreendimentos) -1): ?>
                                                <li><hr class="dropdown-divider"></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

<!--                                 <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "parcerias") ? "active" : ""; ?>" href="parcerias.php">Centro de Férias</a> 
                                </li>
 -->                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row d-block d-sm-none">
            <div class="col p-0 m-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary px-0" id="navbar_mobile">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="#"><img id="logo" src="uploads/logo.png" alt="logo.png"></a>
                        <button id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const navbarToggler = document.getElementById('navbar-toggler');
                                const navbarIcon = navbarToggler.querySelector('.navbar-toggler-icon');

                                navbarToggler.addEventListener('click', function() {
                                        if (navbarToggler.getAttribute('aria-expanded') === 'true') {
                                            navbarIcon.innerHTML = 'X'; // Muda para 'X'
                                            navbarIcon.classList.remove('navbar-toggler-icon'); // Remove o icon original
                                            navbarToggler.style.paddingLeft = '12px'; 
                                        } else {
                                            navbarIcon.innerHTML = ''; // Limpa o icon
                                            navbarIcon.classList.add('navbar-toggler-icon'); // Adiciona o icon original
                                            navbarToggler.style.paddingRight = '';
                                        }
                                });
                            });
                        </script> 
                        <div class="collapse navbar-collapse-mobile" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos </a>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link px-0 <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="empreendimentos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="link_empreendimentos">
                                        Empreendimentos
                                    </a>
                                    <ul class="dropdown-menu" id="dropdown_mobile">

                                        <?php foreach($empreendimentos as $e): ?>

                                            <li><a class="dropdown-item" href="empreendimentos.php?id=<?= $e["id"]; ?> "><?= $e["título"]; ?></a></li>
                                            <div class="dropdown-divider-mobile"></div>

                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "centro_ferias") ? "active" : ""; ?>" href="centro_f.php">Centro de Férias</a> 
                                </li>
                                <li><div class="divider_mobile"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


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

                    <?php elseif ($menu_atual == "empreendimentos"): ?>

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

