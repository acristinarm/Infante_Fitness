<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $parceria_especifica = getParceriaEspecifica($id);

    if (isset($_GET["logo"]) && isset($_GET["nome"]) && isset($_GET["link"])) {
        $logo = $_GET["logo"];
        $nome = $_GET["nome"];
        $link = $_GET["link"];

        // Tratamento do logo para caminho relativo (igual ao do carousel)
        $logo = str_replace(['http://localhost/', 'https://seusite.com/'], '', $logo);
        $logo = preg_replace('#^infante_fitness/#', '', $logo);

        if (!str_starts_with($logo, 'uploads/')) {
            $logo = 'uploads/' . ltrim($logo, '/');
        }

        iduSQL("UPDATE parcerias SET logo='$logo', nome='$nome', link='$link' WHERE id = $id");
        header("Location: parcerias.php");
        exit;
    }
} else {
    // Se não tiver id, redireciona ou trata o erro
    header("Location: parcerias.php");
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
            <h3>Parcerias <?= htmlspecialchars($parceria_especifica["id"]); ?> - Editar</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <label for="logo">Logo: </label><br>
            <input type="text" name="logo" id="logo" required style="width:500px;" value="<?= htmlspecialchars($parceria_especifica["logo"]); ?>">
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <label for="nome">Nome: </label><br>
            <textarea name="nome" id="nome" cols="120" rows="15"><?= htmlspecialchars($parceria_especifica["nome"]); ?></textarea>

            <label for="link">Link: </label><br>
            <textarea name="link" id="link" cols="120" rows="15"><?= htmlspecialchars($parceria_especifica["link"]); ?></textarea>

            <br><br>

            <input type="submit" value="Editar" class="button">
        </form>
    </div>

</main>
