<?php 

$total_paginas = getTotalPaginasPeople();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset(($_GET["pagina"]));
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){ $pagina = $total_paginas;}
}

$people = getPeoplePagina($pagina);
$nutris = getNutrisPagina($pagina);


?>


<main class="container"> 

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Coaches</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Coaches</div>
        </div>

    </div>

    <div class="row d-flex justify-content-center" id="coaches_destaques">

        <?php foreach($people as $p): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card card_coaches" style="border:none;">
                    <img class="coaches m-auto card-img-top" 
                        src="<?= htmlspecialchars($p["imagem"]); ?>" 
                        alt="<?= strip_tags($p["nome"]); ?>">

                    <div class="card-body">
                        <div class="card-title text-center"><?= strip_tags($p["nome"]); ?></div>
                        <div class="card-subtitle mb-2 text-muted text-center"><?= strip_tags($p["subtitulo"]); ?></div>
                        <div class="card-text text_coaches">
                            <ul class="text-start">
                                <?php foreach (explode("\n", strip_tags($p["formacao"])) as $paragrafo): ?>
                                    <?php if (trim($paragrafo) !== ''): ?>
                                        <li><?= trim($paragrafo); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Nutricionistas</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Nutricionistas</div>
        </div>

    </div>

    <div class="row d-flex flex-row justify-content-center ">

        <?php foreach($nutris as $n): ?>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card card_nutris" style="border:none;">
                    <img class="nutri_img m-auto card-img-top" src="<?= $n["imagem"]; ?>" alt="<?= strip_tags($n["nome"]); ?>">
                    <div class="card-body">
                        <div class="card-title text-center"><?= $n["nome"]; ?></div>
                        <div class="card-text text_noticias">
                            <ul class="text-start">
                                <?php foreach (explode("\n", strip_tags($n["formacao"])) as $paragrafo): ?>
                                    <?php if (trim($paragrafo) !== ''): ?>
                                        <li><?= trim($paragrafo); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>                      
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row conteudo_simples d-none d-sm-block">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <div>Recrutamento</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Recrutamento</div>
        </div>

    </div>

    <div class="container my-5 p-4 recrutamento">
        <h2 class="text-center mb-4">Envia-nos a tua Candidatura</h2>

        <form action="enviar_candidatura.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="5" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">Anexar CV (PDF):</label>
                <input type="file" name="cv" id="cv" accept=".pdf" class="form-control" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn_candidatura px-4">Enviar Candidatura</button>
            </div>
        </form>
    </div>



    



<!--     <div class="row">
        <div class="col-12 text-center paginacao d-flex flex-row justify-content-center">

            <?php if($pagina_atual > 1): ?>
                <a href="infante_people.php?pagina=<?= $pagina_atual - 1; ?>"><</a>
            <?php endif; ?>

            <?php for($i=1; $i<=$total_paginas; $i++): ?>
                <a href="infante_people.php?pagina=<?= $i; ?>"> <?= $i; ?> </a>
            <?php endfor; ?>

            <?php if($pagina_atual < $total_paginas): ?>
                <a href="infante_people.php?pagina=<?= $pagina_atual + 1; ?>">></a>
            <?php endif; ?>
        </div>
    </div> -->


</main>
