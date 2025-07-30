<?php 
$daily = getIF_DAILY();
$team = getIF_TEAM();
?>

<main class="container"> 

    <section class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">InFante Fitness Daily</h1>
            <div class="text-muted"><?= $daily["texto"]; ?></div>
        </div>

        <div class="row g-4 text-center justify-content-around">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="hyrox-frame">
                    <div class="hyrox-card p-4">
                        <h3 class="hyrox-title"><?= $daily["tempo"]; ?> MIN</h3>
                        <div class="hyrox-spacer my-3"></div>
                        <p class="hyrox-text"><?= $daily["descricao"]; ?></p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="hyrox-frame">
                    <div class="hyrox-card p-4">
                        <h3 class="hyrox-title"><?= $daily["pessoas"]; ?> PESSOAS</h3>
                        <div class="hyrox-spacer my-3"></div>
                        <p class="hyrox-text">Aulas com capacidade máxima de <?= $daily["pessoas"]; ?> participantes para garantir qualidade e atenção.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 mt-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Aos Sábados</h1>
            <div class="text-muted"><?= $team["texto"]; ?></div>
        </div>

        <div class="row g-4 text-center justify-content-around">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="hyrox-frame">
                    <div class="hyrox-card p-4">
                        <h3 class="hyrox-title"><?= $team["tempo"]; ?> MIN</h3>
                        <div class="hyrox-spacer my-3"></div>
                        <p class="hyrox-text"><?= $team["descricao"]; ?></p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="hyrox-frame">
                    <div class="hyrox-card p-4">
                        <h3 class="hyrox-title"><?= $team["pessoas"]; ?> PESSOAS</h3>
                        <div class="hyrox-spacer my-3"></div>
                        <p class="hyrox-text">Aulas com capacidade máxima de <?= $team["pessoas"]; ?> participantes para garantir qualidade e atenção.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

