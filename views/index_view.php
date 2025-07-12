<?php 

$people_home = getPeopleHome();
$quem_somos_home = getQuemSomos();

$total_paginas = getTotalPaginasParcerias();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset(($_GET["pagina"]));
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){ $pagina = $total_paginas;}
}

$parcerias = getParceriasPagina($pagina);


?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block mb-4">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <p>Sobre Nós</p>
        </div>

        <div class="row conteudo_simples d-none d-md-block px-5">
            <div class="col-12">
                <div class="imagem-com-sobreposicao">
                    <img src="<?= $quem_somos_home["imagem"]; ?>" alt="Imagem principal" class="imagem-sobreposta">
                    <img src="<?= $quem_somos_home["imagem"]; ?>" alt="Imagem de fundo" class="imagem-fundo">
                </div>

                <div class="textos_main">
                <?= $quem_somos_home["texto"]; ?>
                </div>
            </div>
        </div>

    </div>

    <div class="row conteudo_simples d-block d-sm-none mb-3">

        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <p>Sobre Nós</p>
        </div>

        <div class="row conteudo_simples d-block d-md-none px-3">
            <div class="col-12">
                <div class="d-flex justify-content-center quem_somos_casas"><img src="<?= $quem_somos["imagem"]; ?>" alt="predios"></div>
                <div class="textos_main_mobile"><?= $quem_somos["texto"]; ?></div>    
            </div>
        </div>

    </div>

    <div id="typing"></div>

    <script>
        const text = "Making People Better Since 2021";
        const typingElement = document.getElementById("typing");
        let i = 0;

        function type() {
            if (i <= text.length) {
            typingElement.textContent = text.substring(0, i);
            i++;
            setTimeout(type, 120); // velocidade da digitação
            }
        }
        type();
    </script>

    <div class="row destaques d-none d-sm-block">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col titulo_destaques d-flex flex-row justify-content-center">
            <p>As Caras da Box</p>
        </div>
    </div>

    <div class="row destaques d-block d-sm-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col titulo_destaques_mobile d-flex flex-row justify-content-center">
            <p>As Caras da Box</p>
        </div>
    </div>

    <div class="row d-flex justify-content-center" id="coaches_destaques">

        <?php foreach($people_home as $p): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card card_coaches" style="border:none;">
                    <img class="coaches m-auto card-img-top" 
                        src="<?= htmlspecialchars($p["imagem"]); ?>" 
                        alt="<?= strip_tags($p["nome"]); ?>">

                    <div class="card-body">
                        <div class="card-title text-center"><?= strip_tags($p["nome"]); ?></div>
                        <div class="card-subtitle mb-2 text-muted text-center"><?= substr(strip_tags($p["subtitulo"]), 0, 120) ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <section id="parcerias" class="parcerias-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Nossas Parcerias</h2>

            <div class="parceiros-grid">
                <?php foreach($parcerias as $p): ?>
                    <a href="<?= htmlspecialchars($p['link']); ?>" 
                    target="_blank" rel="noopener" class="parceiro-link">
                        <img src="<?= htmlspecialchars($p['logo']); ?>" 
                            alt="<?= strip_tags($p['nome']); ?>" 
                            class="parceiro-logo">
                    </a>
                <?php endforeach; ?>
            </div>
            
        </div>
    </section>


</main>

