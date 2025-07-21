<?php 

$carousel = getCarousel();
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

    <header id="mainHeader">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="index.php" class="logo">
            <img src="uploads/logo_branco.png" alt="Logo" style="height: 90px;">
            </a>

            <!-- Menu Toggle Mobile -->
            <button class="btn text-white d-sm-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            ☰
            </button>

            <!-- Menu Desktop -->
            <nav class="nav-desktop d-none d-sm-flex">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                <li class="nav-item"><a class="nav-link" href="infante_people.php">Infante People</a></li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownServicos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Serviços
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownServicos">
                    <li><a class="dropdown-item" href="precos.php">Preços</a></li>
                    <li><a class="dropdown-item" href="horarios.php">Horários</a></li>
                    <li><a class="dropdown-item" href="inscricao.php">Inscrição</a></li>
                </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="contactos.php">Contactos</a></li>
            </ul>
            </nav>
        </div>

        <!-- Menu Mobile (colapsável) -->
        <div id="mobileMenu" class="d-sm-none collapse">
        <ul class="nav flex-column text-center py-2">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="infante_people.php">Infante People</a></li>
            <li class="nav-item"><a class="nav-link" href="precos.php">Preços</a></li>
            <li class="nav-item"><a class="nav-link" href="horarios.php">Horários</a></li>
            <li class="nav-item"><a class="nav-link" href="inscricao.php">Inscrição</a></li>
            <li class="nav-item"><a class="nav-link" href="contactos.php">Contactos</a></li>
        </ul>
        </div>
    </header>


        <?php if ($showCarousel): ?>

            <div class="overlay-banner">
                <div class="overlay-content text-center">
                    <h1 class="titulo-banner">O TUA BOX. A TUA MOTIVAÇÃO.</h1>
                    <p class="subtitulo-banner">Making People Better Since 2021!</p>
                    <a href="inscricao.php#experimentar" class="btn-experimentar">QUERO EXPERIMENTAR</a>
                </div>
            </div>

            <!-- Carrossel -->
            <div class="row d-none d-sm-block mx-0 position-relative">
                <div class="col p-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">

                            <?php foreach($carousel as $i => $c): ?>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $i + 1; ?>"></button>

                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-inner">

                            <?php foreach($carousel as $i => $c): ?>

                                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>" data-bs-interval="2000">
                                    <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="...">
                                </div>
                                    
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-block d-sm-none mx-0 position-relative">
                <div class="col p-0" id="carousel_mobile">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">

                            <?php foreach($carousel as $i => $c): ?>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $i + 1; ?>"></button>

                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-inner">

                            <?php foreach($carousel as $i => $c): ?>

                                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>" data-bs-interval="2000">
                                    <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="...">
                                </div>
                                    
                            <?php endforeach; ?>

                        </div>
                        </div>
                    </div>
                </div>
           </div>

        <?php else: ?>
        <!-- Imagens Fixas -->

            <div class="row position-relative m-0">
                <div class="col p-0 img_cabecalho">

                    <?php if ($menu_atual == "infante_people"): ?>
                        <img src="<?=$banner[0]["imagem"]; ?>" alt="">
                    <?php elseif ($menu_atual == "servicos"): ?>
                        <img src="<?=$banner[1]["imagem"]; ?>" alt="">
                    <?php elseif ($menu_atual == "contactos"): ?>
                        <img src="<?=$banner[2]["imagem"]; ?>" alt="">

                    <?php endif; ?>

                </div>
            </div>

        <?php endif; ?>


<script>
let lastScrollTop = 0;
const header = document.getElementById("mainHeader");

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScrollTop && currentScroll > 100) {
    // Scroll down
    header.classList.add("hide-header");
  } else {
    // Scroll up
    header.classList.remove("hide-header");
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // evita valores negativos
});
</script>
