<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
}

?>


<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Destaques</div>
            <div class="bem_vindo_subtitulo"><?= $destaque_especifico["título"]; ?></div>
        </div>

        <div class="col-12">
            <div class="textos_main"><?= $destaque_especifico["texto"]; ?></div>
        </div>

        <div class="col"> 
            <a href="destaques.php" class="d-flex flex-row justify-content-end">
                <div class="botao botao_destaques d-flex flex-row justify-content-center align-items-center">
                Voltar para destaques
                </div>
            </a>        
        </div>

    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Destaques</div>
            <div class="bem_vindo_subtitulo_mobile"><?= $destaque_especifico["título"]; ?></div>
        </div>

        <div class="col-12">
            <div class="textos_main_mobile px-4"><?= $destaque_especifico["texto"]; ?></div>
        </div>

        <div class="col"> 
            <a href="destaques.php" class="d-flex flex-row justify-content-end px-4">
                <div class="botao botao_destaques_mobile d-flex flex-row justify-content-center align-items-center">
                Voltar para Destaques  
                </div>
            </a>        
        </div>

    </div>

</main>
