<?php 

$people_home = getPeopleHome();
$nutris_home = getNutriHome();
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
$servicos = getServicoPagina($pagina);


?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-md-block mb-4">
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

    <div class="row conteudo_simples d-block d-md-none mb-3 index_view">

        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <p>Sobre Nós</p>
        </div>

        <div class="row conteudo_simples d-block d-md-none px-3">
            <div class="col-12">
                <div class="imagem-com-sobreposicao">
                    <img src="<?= $quem_somos_home["imagem"]; ?>" alt="Imagem principal" class="imagem-sobreposta_mobile">
                    <img src="<?= $quem_somos_home["imagem"]; ?>" alt="Imagem de fundo" class="imagem-fundo_mobile">
                </div>
                <div class="textos_main_mobile mb-5">
                    <?= $quem_somos_home["texto"]; ?>
                </div>    
            </div>
        </div>

    </div>

    <div class="row destaques d-none d-sm-block ">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col titulo_destaques d-flex flex-row justify-content-center">
            <p>Staff</p>
        </div>
    </div>

    <div class="row destaques d-block d-sm-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col titulo_destaques_mobile d-flex flex-row justify-content-center">
            <p>Staff</p>
        </div>
    </div>

    <div class="row d-flex justify-content-center" id="people_home">

        <?php foreach($people_home as $p): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card" style="border:none;">
                    <img class="coaches m-auto card-img-top" 
                        src="<?= htmlspecialchars($p["imagem"]); ?>" 
                        alt="<?= strip_tags($p["nome"]); ?>">

                    <div class="card-body">
                        <div class="card-title text-center"><?= strip_tags($p["nome"]); ?></div>
                        <div class="card-subtitle text-muted text-center"><?= substr(strip_tags($p["subtitulo"]), 0, 120) ?></div>
                    </div>
                </div>
            </div> 
        <?php endforeach; ?>

        <?php foreach($nutris_home as $n): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card" style="border:none;">
                    <img class="coaches m-auto card-img-top" 
                        src="<?= htmlspecialchars($n["imagem"]); ?>" 
                        alt="<?= strip_tags($n["nome"]); ?>">

                    <div class="card-body">
                        <div class="card-title text-center"><?= strip_tags($n["nome"]); ?></div>
                    </div>
                </div>
            </div> 
        <?php endforeach; ?>


    </div>

    <div class="row destaques d-none d-sm-block ">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col titulo_destaques d-flex flex-row justify-content-center">
            <p>Serviços</p>
        </div>
    </div>

    <div class="row destaques d-block d-sm-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col titulo_destaques_mobile d-flex flex-row justify-content-center">
            <p>Serviços</p>
        </div>
    </div>

    <div class="row d-flex justify-content-center" id="servicos_home">

        <?php foreach($servicos as $s): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card card_servicos shadow-lg border-0 img-wrapper">
                    <img class="card-img-top mx-auto img-fluid" 
                        src="<?= htmlspecialchars($s["imagem"]); ?>" 
                        alt="<?= htmlspecialchars($s["nome"]); ?>"
                    >

                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?= strip_tags($s["nome"]); ?></h5>
                        <div class="card-text text_servicos">
                            <?php foreach (explode("\n", strip_tags($s["texto"])) as $paragrafo): ?>
                                <?php if (trim($paragrafo) !== ''): ?>
                                    <p><?= trim($paragrafo); ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>



    <div class="row destaques d-none d-sm-block parceiros_home ">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col titulo_destaques d-flex flex-row justify-content-center">
            <p>Parceiros</p>
        </div>
    </div>

    <div class="row destaques d-block d-sm-none ">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col titulo_destaques_mobile d-flex flex-row justify-content-center">
            <p>Parceiros</p>
        </div>
    </div>


    <section id="parcerias" class="parcerias-section py-5">
        <div class="container text-center">

            <div class="parceiros-grid">
                <?php foreach($parcerias as $p): ?>
                    <a href="<?= htmlspecialchars(strip_tags($p['link'])); ?>" 
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

