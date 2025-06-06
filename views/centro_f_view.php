<?php 

$centro_ferias = getCentroFerias();

?>


<main class="container"> 

        <div class="row conteudo_simples d-none d-sm-block">
            <div class="col">
                <div class="linha_laranja m-auto"></div>
            </div>

            <div class="col bem_vindo">
                <div><?= $centro_ferias["titulo"]; ?></div>
            </div>
        </div>

        <div class="row conteudo_simples d-none d-sm-block px-3">
            <div class="col-12">
                <img src="<?= $centro_ferias["imagem_principal"]; ?>" alt="<?= $centro_ferias["titulo"]; ?>" class="float-start mt-0 me-4 mb-4">
                <div class="textos_main texto1"><?= $centro_ferias["texto"]; ?></div>   
            </div>
        </div>

        <div class="row conteudo_simples d-block d-sm-none">
            <div class="col">
                <div class="linha_laranja_mobile m-auto"></div>
            </div>  

            <div class="col bem_vindo_mobile">
                <div><?= $centro_ferias["titulo"]; ?></div>
            </div>
        </div>

        <div class="row conteudo_simples d-block d-sm-none px-4">
            <div class="col-12">
                <div class="d-flex justify-content-center"><img src="<?= $centro_ferias["imagem_principal"]; ?>" alt="<?= $centro_ferias["titulo"]; ?>" id="ferias_1"></div>
                <div class="textos_main_mobile"><?= $centro_ferias["texto"]; ?></div>    
            </div>
        </div>

        <div class="row m-auto d-flex flex-row justify-content-center mt-5">
            <?php for($i=1; $i<=4; $i++): ?>
                <div class="col-xl-6 col d-flex flex-row justify-content-center casas_ferias">
                    <img src="<?= $centro_ferias["imagem_sec_$i"]; ?>" alt="<?= $centro_ferias["imagem_sec_$i"]; ?>">
                </div>
            <?php endfor; ?>
        </div>

</main>
