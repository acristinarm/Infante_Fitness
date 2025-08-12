<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $nutri_especifico = getNutriEspecifico($id);

    // Verifica se todos os campos necessários existem
    $form_2 = isset($_GET["imagem"]) && isset($_GET["nome"]) && isset($_GET["formacao"]) && isset($_GET["mostrar_home"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $nome = $_GET["nome"];
        $formacao = $_GET["formacao"];
        $mostrar_home = $_GET["mostrar_home"];

        // Limpa caminho da imagem para ficar relativo
        $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
        $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

        // Garante que comece com uploads/
        if (!str_starts_with($imagem, 'uploads/')) {
            $imagem = 'uploads/' . ltrim($imagem, '/');
        }

        iduSQL("UPDATE nutricionistas SET imagem='$imagem', nome='$nome', formacao='$formacao', mostrar_home='$mostrar_home' WHERE id = $id");
        header("Location: nutricionistas.php");
        exit;
    }
} else {
    // Se não tiver id, redireciona ou trata o erro
    header("Location: nutricionistas.php");
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
            <h3>Nutricionista Editar</h3>
        </div>
    </div>
 
    <div class="row mx-0 mt-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <label for="nome">Nome: </label>
            <textarea name="nome" id="nome" cols="120" rows="15"><?= htmlspecialchars($nutri_especifico["nome"]); ?></textarea>

            <br><br> 

            <label for="imagem">Imagem: </label>
            <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= htmlspecialchars($nutri_especifico["imagem"]); ?>">
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="mostrar_home">Mostrar na Home:</label><br>
            <select name="mostrar_home" id="mostrar_home">
                <option value="1" <?= ($nutri_especifico["mostrar_home"] == 1) ? "selected" : ""; ?>>SIM</option>
                <option value="0" <?= ($nutri_especifico["mostrar_home"] == 0) ? "selected" : ""; ?>>NÃO</option>
            </select>

            <br><br>

            <label for="formacao">Formação: </label><br>
            <textarea name="formacao" id="formacao" cols="120" rows="15"><?= htmlspecialchars($nutri_especifico["formacao"]); ?></textarea>
            
            <br><br>

            <input type="submit" value="Editar" class="button">
        </form>
    </div>

</main>
