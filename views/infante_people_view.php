<?php 

$total_paginas = getTotalPaginasPeople();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset(($_GET["pagina"]));
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){ $pagina = $total_paginas;}
}

$people = getPeoplePagina($pagina);
$destaques = getDestaquesPagina($pagina);


?>


<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Coaches</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Coaches</div>
        </div>

    </div>

    <div class="row d-flex justify-content-center" id="coaches_destaques">

        <?php foreach($people as $p): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card noticias" style="border:none;">
                    <img class="coaches card-img-top" src="<?= $p["imagem"]; ?>" alt="<?= $p["nome"]; ?>">
                    <div class="card-body">
                        <div class="card-title"><?= $p["nome"]; ?></div>
                        <div class="card-subtitle mb-2 text-muted"><?= $p["subtitulo"]; ?></div>
                        <div class="card-text text_noticias"><?= substr($p["formacao"], 0, 300); ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Nutricionistas</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Nutricionistas</div>
        </div>

    </div>

    <div class="row d-flex flex-row justify-content-center" id="casas_destaques">

        <?php foreach($destaques as $d): ?>
            <div class="col-lg-5">

                <div class="card">
                    <img class="casas" src="<?= $d["imagem"]; ?>" class="card-img-top" alt="<?= $d["título"]; ?>">
                    <div class="card-body">
                        <p class="card-title"><?= $d["título"]; ?></p>
                        <div class="card-text"><?= substr($d["texto"], 0, 120) ?> ...</div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>


    



<!--     <div class="row">
        <div class="col-12 text-center paginacao d-flex flex-row justify-content-center">

            <?php if($pagina_atual > 1): ?>
                <a href="infante_people.php?pagina=<?= $pagina_atual - 1; ?>"><</a>
            <?php endif; ?>

            <?php for($i=1; $i<=$total_paginas; $i++): ?>
                <a href="infante_people.php?pagina=<?= $i; ?>"> <?= $i; ?> </a>
            <?php endfor; ?>

            <?php if($pagina_atual < $total_paginas): ?>
                <a href="infante_people.php?pagina=<?= $pagina_atual + 1; ?>">></a>
            <?php endif; ?>
        </div>
    </div> -->


</main>
