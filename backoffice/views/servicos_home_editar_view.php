<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $servico_especifico = getServicoEspecifico($id);

    // Verifica se todos os campos necessários existem
    $form_2 = isset($_GET["imagem"]) &&isset($_GET["nome"]) && isset($_GET["texto"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $nome = $_GET["nome"];
        $texto = $_GET["texto"];

        // Limpa caminho da imagem para ficar relativo
        $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
        $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

        // Garante que comece com uploads/
        if (!str_starts_with($imagem, 'uploads/')) {
            $imagem = 'uploads/' . ltrim($imagem, '/');
        }

        iduSQL("UPDATE servicos SET imagem='$imagem', nome='$nome', texto='$texto' WHERE id = $id");
        header("Location: servicos_home.php");
        exit;
    }
} else {
    // Se não tiver id, redireciona ou trata o erro
    header("Location: servicos_home.php");
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
            <h3>Serviços Editar</h3>
        </div>
    </div>
 
    <div class="row mx-0 mt-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <br><br> 

            <label for="nome">Nome: </label>
            <textarea name="nome" id="nome" cols="120" rows="15"><?= htmlspecialchars($servico_especifico["nome"]); ?></textarea>

            <label for="imagem">Imagem: </label>
            <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= htmlspecialchars($servico_especifico["imagem"]); ?>">
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="texto" cols="120" rows="15"><?= htmlspecialchars($servico_especifico["texto"]); ?></textarea>
            
            <br><br>

            <input type="submit" value="Editar" class="button">
        </form>
    </div>

</main>
