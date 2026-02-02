<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $testemunho_especifico = getTestemunhoEspecifico($id);

    // Verifica se todos os campos necessários existem
    $form_2 = isset($_GET["imagem_antes"]) && isset($_GET["imagem_depois"]) && isset($_GET["texto"]) && isset($_GET["nome"]);
    if($form_2){
        $imagem_antes = $_GET["imagem_antes"];
        $imagem_depois = $_GET["imagem_depois"];
        $texto = $_GET["texto"];
        $nome = $_GET["nome"];

        // Limpa caminhos para ficarem relativos (opcional)
        $imagem_antes = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem_antes);
        $imagem_depois = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem_depois);

        // Garante que comecem com "uploads/"
        if (!str_starts_with($imagem_antes, 'uploads/')) {
            $imagem_antes = 'uploads/' . ltrim($imagem_antes, '/');
        }
        if (!str_starts_with($imagem_depois, 'uploads/')) {
            $imagem_depois = 'uploads/' . ltrim($imagem_depois, '/');
        }

        // Atualiza na BD
        iduSQL("UPDATE testemunhos 
                SET imagem_antes='$imagem_antes', imagem_depois='$imagem_depois', texto='$texto', nome='$nome' 
                WHERE id = $id");
        header("Location: testemunhos.php");
        exit;
    }
} else {
    header("Location: testemunhos.php");
    exit;
}


?>

<main class="conatiner my-5 text-center">

    <script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>

    <div class="row m-0">
        <div class="col-12">
            <h3>Testemunho Editar</h3>
        </div>
    </div>
 
    <div class="row mx-0 mt-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <label for="nome">Nome: </label><br>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($testemunho_especifico["nome"]); ?>" style="width:500px;" required>

            <br><br> 

            <label for="imagem_antes">Imagem Antes: </label><br>
            <input type="text" name="imagem_antes" id="imagem_antes" value="<?= htmlspecialchars($testemunho_especifico["imagem_antes"]); ?>" style="width:500px;" required>
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="imagem_depois">Imagem Depois: </label><br>
            <input type="text" name="imagem_depois" id="imagem_depois" value="<?= htmlspecialchars($testemunho_especifico["imagem_depois"]); ?>" style="width:500px;" required>
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="texto" cols="120" rows="15"><?= htmlspecialchars($testemunho_especifico["texto"]); ?></textarea>
            
            <br><br>

            <input type="submit" value="Editar" class="button">
        </form>
    </div>

</main>
