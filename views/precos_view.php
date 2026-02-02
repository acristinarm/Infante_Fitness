<?php 

$preco = getPreco();


?>


<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Preços</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Preços</div>
        </div>

    </div>

    <div class="row d-flex flex-row justify-content-center ">

        <?php foreach($preco as $p): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card card_precos" style="border:none;">
                    <img class="precos_img m-auto card-img-top" src="<?= $p["imagem"]; ?>" alt="">
                    <div class="card-body-precos">
                        <div class="card-text text_precos">
                            <?= $p["texto"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</main>
