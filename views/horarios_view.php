<?php 

$horarios = getHorarios();

?>

<main class="container"> 

<div class="row conteudo_simples d-none d-sm-block">
    <div class="col">
        <div class="linha_laranja m-auto"></div>
    </div>

    <div class="col bem_vindo">
        <div>horarios</div>
    </div>
</div>

<div class="row mt-4 conteudo_simples d-none d-sm-block px-5">
    <div class="col-12">
        <img src="<?= $horarios["imagem"]; ?>" alt="Horário" class="img-fluid">
    </div>
</div>  


<div class="row mt-4 conteudo_simples d-none d-sm-block px-5">
    <div class="col-12">
        <div class="textos_main"><?= $horarios["texto"]; ?></div>
    </div>
</div>  

<div class="row conteudo_simples d-block d-sm-none">
    <div class="col">
        <div class="linha_laranja_mobile m-auto"></div>
    </div>
    <div class="col bem_vindo_mobile">
        <div>Horários</div>
    </div>

</div>

<div class="row conteudo_simples d-block d-sm-none px-3">
    <div class="col-12">
        <div class="textos_main_mobile"><?= $horarios["texto"]; ?></div>  
    </div>
</div>

</main>
