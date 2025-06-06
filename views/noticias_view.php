<?php 

$total_paginas = getTotalPaginasNoticias();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset(($_GET["pagina"]));
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){ $pagina = $total_paginas;}
}

$noticias = getNoticiasPagina($pagina);

?>


<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Notícias</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Notícias</div>
        </div>

    </div>

    <div class="row d-flex flex-row justify-content-center" id="casas_destaques">

        <?php foreach($noticias as $n): ?>
            <div class="col-lg-5">
                <div class="card noticias">
                    <img class="casas" src="<?= $n["imagem"]; ?>" class="card-img-top" alt="<?= $n["imagem"]; ?>">
                    <div class="card-body">
                        <div class="card-title"><?= $n["título"]; ?></div>
                        <div class="card-text text_noticias"><?= substr($n["texto"], 0, 300); ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row">
        <div class="col-12 text-center paginacao d-flex flex-row justify-content-center">

            <?php if($pagina_atual > 1): ?>
                <a href="noticias.php?pagina=<?= $pagina_atual - 1; ?>"><</a>
            <?php endif; ?>

            <?php for($i=1; $i<=$total_paginas; $i++): ?>
                <a href="noticias.php?pagina=<?= $i; ?>"> <?= $i; ?> </a>
            <?php endfor; ?>

            <?php if($pagina_atual < $total_paginas): ?>
                <a href="noticias.php?pagina=<?= $pagina_atual + 1; ?>">></a>
            <?php endif; ?>
        </div>
    </div>


</main>
