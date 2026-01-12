<?php 

$total_paginas = getTotalPaginasPeople();
$pagina = 1;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$form = isset($_GET["pagina"]);
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
            <div>Treinadores</div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <div>Treinadores</div>
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

<section id="candidatura" class="py-5" style="background-color:rgba(1, 11, 21, 0.93); color: #fff;">
    <div class="container">
        <h2 class="text-center mb-3" style="font-size: 2.2rem; font-weight: bold; color: rgb(63, 205, 205);">
            Envia-nos a tua Candidatura
        </h2>
        <p class="text-center mb-4" style="font-size: 1.1rem;">
            Preenche os dados e envia o teu CV em PDF.
        </p>

        <form id="formCandidatura" action="enviar_candidatura.php" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <input type="text" name="nome" id="nome" placeholder="Nome *" required
                    class="form-control"
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
            </div>

            <div class="mb-3">
                <input type="email" name="email" id="email" placeholder="Email *" required
                    class="form-control"
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
            </div>

            <div class="mb-3">
                <input type="file" name="cv" id="cv" accept=".pdf" required
                    class="form-control"
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;"/>
            </div>

            <!-- 🔹 reCAPTCHA v3 token -->
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

            <div class="text-center mb-3">
                <small>Os campos assinalados com * são obrigatórios</small>
            </div>

            <button type="submit" class="btn w-100 mt-3"
                style="background-color:rgb(63, 205, 205); color: #fff; font-weight: bold; padding: 1rem;">
                Enviar Candidatura
            </button>
        </form>
    </div>
</section>

<!-- reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6LfodEgsAAAAABltD8WoIALHr5_pAonPJ7h_Fbr-"></script>
<script>
grecaptcha.ready(function() {
    document.getElementById('formCandidatura').addEventListener('submit', function(e) {
        e.preventDefault(); // espera token
        grecaptcha.execute('6LfodEgsAAAAABltD8WoIALHr5_pAonPJ7h_Fbr-', {action: 'candidatura'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
            e.target.submit(); // envia o form
        });
    });
});
</script>


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
