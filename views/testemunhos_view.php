<?php 

$testemunhos = getTestemunhos();

?>

<main class="container testemunhos"> 

    <div class="row d-none d-md-block mb-4">
        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>

        <div class="col bem_vindo">
            <p>Testemunhos</p>
        </div>
    </div>
    <?php foreach ($testemunhos as $index => $testemunho): ?>

        <div class="row d-none d-md-block px-5 mb-5">

            <div class="col-12">
                <div class="row align-items-center">

                    <?php if ($index % 2 == 0): ?>
                        <!-- IMAGENS À ESQUERDA -->
                        <div class="col-md-4">
                            <div class="row g-2">
                                <div class="col-6">
                                    <img src="<?= htmlspecialchars($testemunho["imagem_antes"]); ?>"
                                        alt="Imagem antes"
                                        class="img-fluid imagem-antes">
                                </div>
                                <div class="col-6">
                                    <img src="<?= htmlspecialchars($testemunho["imagem_depois"]); ?>"
                                        alt="Imagem depois"
                                        class="img-fluid imagem-depois">
                                </div>
                            </div>
                        </div>

                        <!-- TEXTO À DIREITA -->
                        <div class="col-md-8">
                            <div class="textos_testemunhos">
                                <?= $testemunho["texto"]; ?>
                            </div>
                            <div class="text-end">
                                <?= htmlspecialchars($testemunho["nome"]); ?>
                            </div>
                        </div>

                    <?php else: ?>
                        <!-- TEXTO À ESQUERDA -->
                        <div class="col-md-8">
                            <div class="textos_testemunhos">
                                <?= $testemunho["texto"]; ?>
                            </div>
                            <div>
                                <?= htmlspecialchars($testemunho["nome"]); ?>
                            </div>
                        </div>

                        <!-- IMAGENS À DIREITA -->
                        <div class="col-md-4">
                            <div class="row g-2">
                                <div class="col-6">
                                    <img src="<?= htmlspecialchars($testemunho["imagem_antes"]); ?>"
                                        alt="Imagem antes"
                                        class="img-fluid imagem-antes">
                                </div>
                                <div class="col-6">
                                    <img src="<?= htmlspecialchars($testemunho["imagem_depois"]); ?>"
                                        alt="Imagem depois"
                                        class="img-fluid imagem-depois">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>

    <?php endforeach; ?>


    <div class="row d-block d-md-none mb-3 index_view">

        <div class="col">
            <div class="linha_laranja_mobile m-auto mt-5"></div>
        </div>

        <div class="col bem_vindo_mobile">
            <p>Testemunhos</p>
        </div>

        <div class="row d-block d-md-none px-3">

            <?php foreach ($testemunhos as $t): ?>
                <div class="col-12 mb-4">
                    <div class="text-center">
                        <img src="<?= htmlspecialchars($t["imagem_antes"]); ?>" 
                            alt="Imagem antes" class="imagem-antes_mobile">
                        <img src="<?= htmlspecialchars($t["imagem_depois"]); ?>" 
                            alt="Imagem depois" class="imagem-depois_mobile">
                    </div>

                    <div class="p-3">
                        <div class="textos_main_mobile mb-3">
                            <?= $t["texto"]; ?>
                        </div>    

                        <div class="text-end">
                            <?= htmlspecialchars($t["nome"]); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

</main>

