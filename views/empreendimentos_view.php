<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $empreendimento_especifico = getEmpreendimentoEspecifico($id);
}


?>

<?php if(!empty($empreendimento_especifico)): ?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <p>Empreendimentos</p>
            <div class="bem_vindo_subtitulo"><?= $empreendimento_especifico["título"]; ?></div>
        </div>

    </div>

    <div class="row conteudo_simples d-none d-sm-block px-3">
        <div class="col-12">
            <div class="textos_main texto1"><?= $empreendimento_especifico["texto"]; ?></div>
        </div>
    </div>


    <div class="row conteudo_simples d-block d-sm-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Empreendimentos</div>
            <div class="bem_vindo_subtitulo_mobile"><?= $empreendimento_especifico["título"]; ?></div>
        </div>

    </div>

    <div class="row conteudo_simples d-block d-sm-none px-4">
        <div class="col-12">
            <div class="textos_main_mobile"><?= $empreendimento_especifico["texto"]; ?></div>    
        </div>
    </div>

    <div class="row m-auto d-flex flex-row justify-content-center mt-5">

        <?php for($i=1; $i<=4; $i++): ?>

            <?php if(!empty($empreendimento_especifico["imagem_$i"])): ?>

                <div class="col-xl-6 col-lg d-flex flex-row justify-content-center casas_ferias">
                    <img src="<?= $empreendimento_especifico["imagem_$i"]; ?>" alt="<?= $empreendimento_especifico["imagem_$i"]; ?>">
                </div>
            <?php endif; ?>

        <?php endfor; ?>

    </div>

</main>

<?php else: ?>

<main class="container">

    <div class="row conteudo_simples d-none d-sm-block">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <p>Empreendimento Não Encontrado</p>
        </div>
    </div>

</main>


<?php endif; ?>
