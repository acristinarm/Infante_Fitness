<?php 

$quem_somos = getQuemSomos();

?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-md-block">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo ">
            <p>Quem Somos</p>
        </div>
    </div>

    <div class="row conteudo_simples d-none d-md-block px-5">
        <div class="col-12">
            <div><img src="<?= $quem_somos["imagem"]; ?>" alt="predios" class="float-start mt-0 me-4 mb-4"></div>
            <div class="textos_main texto1"><?= $quem_somos["texto"]; ?></div>
        </div>
    </div>

    <div class="row conteudo_simples d-block d-md-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Quem Somos</div>
        </div>
    </div>

    <div class="row conteudo_simples d-block d-md-none px-3">
        <div class="col-12">
            <div class="d-flex justify-content-center quem_somos_casas"><img src="<?= $quem_somos["imagem"]; ?>" alt="predios"></div>
            <div class="textos_main_mobile"><?= $quem_somos["texto"]; ?></div>    
        </div>
    </div>

</main>
