<?php 

$destaques_home = getDestaquesHome();
$quem_somos_home = getQuemSomos();

?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block mb-4">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <p>Bem-vindo à <br> Cooperativa de Construção e Habitação Tripeira</p>
        </div>

        <div class="col textos">
            <div><?= substr($quem_somos_home["texto"], 0, 1000) ?> ...</div>
        </div>

        <a href="quem_somos.php" class="d-flex flex-row justify-content-center">
            <div class="botao_ver_mais_1 botao d-flex flex-row justify-content-center align-items-center">
            Ver Mais
            </div>
        </a>
    </div>

    <div class="row conteudo_simples d-block d-sm-none mb-3">

        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <p>Bem-vindo à <br> Cooperativa de Construção e Habitação Tripeira</p>
        </div>

        <div class="col textos_mobile">
            <div><?= substr($quem_somos_home["texto"], 0, 1000) ?> ...</div>
        </div>

        <a href="quem_somos.php" class="d-flex flex-row justify-content-center">
            <div class="botao_ver_mais_1_mobile botao d-flex flex-row justify-content-center align-items-center">
            Ver Mais
            </div>
        </a>

    </div>

    <div class="row destaques d-none d-sm-block">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col titulo_destaques d-flex flex-row justify-content-center">
            <p>Destaques</p>
        </div>
    </div>

    <div class="row destaques d-block d-sm-none">
        <div class="col">
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col titulo_destaques_mobile d-flex flex-row justify-content-center">
            <p>Destaques</p>
        </div>
    </div>

    <div class="row m-auto d-flex flex-row justify-content-center">

        <?php foreach($destaques_home as $d): ?>
            <div class="col-xl-4 col-lg-5 d-flex flex-row justify-content-center flex-wrap">

                <div class="card">
                    <img class="casas" src="<?= $d["imagem"]; ?>" class="card-img-top" alt="<?= $d["título"]; ?>">
                    <div class="card-body">
                        <div class="card-title"><?= $d["título"]; ?></div>
                        <div class="card-text"><?= substr($d["texto"], 0, 120) ?> ...</div>
                        <a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="d-flex flex-row justify-content-center">
                            <div class="botao_ver_mais_2 botao d-flex flex-row justify-content-center align-items-center">
                            Ver Mais
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>


</main>

