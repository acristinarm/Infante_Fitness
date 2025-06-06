<?php 

$total_paginas = getTotalPaginas();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset(($_GET["pagina"]));
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){ $pagina = $total_paginas;}
}

$destaques = getDestaquesPagina($pagina);


?>
    
    <main class="container"> 

        <div class="row conteudo_simples d-none d-sm-block">

            <div class="col">
                <div class="linha_laranja m-auto"></div>
            </div>

            <div class="col bem_vindo">
                <div>Destaques</div>
            </div>

        </div>


        <div class="row conteudo_simples d-block d-sm-none">

            <div class="col">
                <div class="linha_laranja_mobile m-auto"></div>
            </div>

            <div class="col bem_vindo_mobile">
                <div>Destaques</div>
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
                            <a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="d-flex flex-row justify-content-center">
                                <div class="botao_ver_mais_3 botao d-flex flex-row justify-content-center align-items-center">
                                Ver Mais
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <div class="row">
            <div class="col-12 text-center paginacao d-flex flex-row justify-content-center">

                <?php if($pagina_atual > 1): ?>
                    <a href="destaques.php?pagina=<?= $pagina_atual - 1; ?>"><</a>
                <?php endif; ?>

                <?php for($i=1; $i<=$total_paginas; $i++): ?>
                    <a href="destaques.php?pagina=<?= $i; ?>"> <?= $i; ?> </a>
                <?php endfor; ?>

                <?php if($pagina_atual < $total_paginas): ?>
                    <a href="destaques.php?pagina=<?= $pagina_atual + 1; ?>">></a>
                <?php endif; ?>
            </div>
        </div>

    </main>
