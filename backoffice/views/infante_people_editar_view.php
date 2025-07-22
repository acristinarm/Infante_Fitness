<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $people_especifica = getPeopleEspecifica($id);

    $form_2 = isset($_GET["imagem"]) && isset($_GET["nome"]) && isset($_GET["subtitulo"]) && isset($_GET["formacao"]) && isset($_GET["mostrar_home"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $nome = $_GET["nome"];
        $subtitulo = $_GET["subtitulo"];
        $formacao = $_GET["formacao"];
        $mostrar_home = $_GET["mostrar_home"];

        // Remove domínio e caminho fixo
        $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
        $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

        // Garante que comece com uploads/
        if (!str_starts_with($imagem, 'uploads/')) {
            $imagem = 'uploads/' . ltrim($imagem, '/');
        }

        iduSQL("UPDATE infante_people SET imagem='$imagem', nome='$nome', subtitulo='$subtitulo', formacao='$formacao', mostrar_home='$mostrar_home' WHERE id = $id");
        header("Location: infante_people.php");
        exit;
    }
} else {
    header("Location: infante_people.php");
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
            <h3>Coach <?= htmlspecialchars($people_especifica["id"]); ?> - Editar</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <label for="imagem">Imagem: </label><br>
            <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= htmlspecialchars($people_especifica["imagem"]); ?>">
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="mostrar_home">Mostrar na Home:</label><br>
            <select name="mostrar_home" id="mostrar_home">
                <option value="1" <?= ($people_especifica["mostrar_home"] == 1) ? "selected" : ""; ?>>SIM</option>
                <option value="0" <?= ($people_especifica["mostrar_home"] == 0) ? "selected" : ""; ?>>NÃO</option>
            </select>

            <br><br>

            <label for="nome">Nome: </label><br>
            <textarea name="nome" id="nome" cols="120" rows="15"><?= htmlspecialchars($people_especifica["nome"]); ?></textarea>

            <label for="subtitulo">Sub-título: </label><br>
            <textarea name="subtitulo" id="subtitulo" cols="120" rows="15"><?= htmlspecialchars($people_especifica["subtitulo"]); ?></textarea>

            <label for="formacao">Formação: </label><br>
            <textarea name="formacao" id="formacao" cols="120" rows="15"><?= htmlspecialchars($people_especifica["formacao"]); ?></textarea>
            
            <br><br>

            <input type="submit" value="Editar" class="button">
        </form>
    </div>
</main>
