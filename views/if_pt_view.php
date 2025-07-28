<?php 
$pt = getIF_PT();
?>

<section class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Infante Fitness PT</h1>
        <div class="text-muted"><?= $pt["texto"]; ?></div>
    </div>

    <div class="row g-4 text-center justify-content-around">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="hyrox-frame">
                <div class="hyrox-card p-4">
                    <h3 class="hyrox-title"><?= $pt["tempo"]; ?> MIN</h3>
                    <div class="hyrox-spacer my-3"></div>
                    <p class="hyrox-text"><?= $pt["descricao"]; ?></p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="hyrox-frame">
                <div class="hyrox-card p-4">
                    <h3 class="hyrox-title"><?= $pt["pessoas"]; ?> PESSOAS</h3>
                    <div class="hyrox-spacer my-3"></div>
                    <p class="hyrox-text">Aulas com capacidade máxima de <?= $pt["pessoas"]; ?> participantes para garantir qualidade e atenção.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="hyrox-frame">
                <div class="hyrox-card p-4">
                    <h3 class="hyrox-title">1X a <?= $pt["assiduidade"]; ?>X por semana </h3>
                    <div class="hyrox-spacer my-3"></div>
                    <p class="hyrox-text">Aulas com capacidade máxima de <?= $pt["pessoas"]; ?> participantes para garantir qualidade e atenção.</p>
                </div>
            </div>
        </div>
    </div>
</section>

