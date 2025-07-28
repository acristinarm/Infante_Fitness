<?php 
$hyrox = getIF_HYROX();
?>

<section class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Hyrox</h1>
        <div class="text-muted"><?= $hyrox["texto"]; ?></div>
    </div>

    <div class="row g-4 text-center justify-content-around">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="hyrox-frame">
                <div class="hyrox-card p-4">
                    <h3 class="hyrox-title"><?= $hyrox["tempo"]; ?> MIN</h3>
                    <div class="hyrox-spacer my-3"></div>
                    <p class="hyrox-text"><?= $hyrox["descricao"]; ?></p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="hyrox-frame">
                <div class="hyrox-card p-4">
                    <h3 class="hyrox-title"><?= $hyrox["pessoas"]; ?> PESSOAS</h3>
                    <div class="hyrox-spacer my-3"></div>
                    <p class="hyrox-text">Aulas com capacidade máxima de <?= $hyrox["pessoas"]; ?> participantes para garantir qualidade e atenção.</p>
                </div>
            </div>
        </div>
    </div>
</section>

