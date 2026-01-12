<?php 

$form = isset($_GET["logo"]) && isset($_GET["link"]) && isset($_GET["nome"]);
if($form){
    $logo = $_GET["logo"];
    $link = $_GET["link"];
    $nome = $_GET["nome"];

    // Tratamento do logo para caminho relativo (igual ao exemplo do carousel)
    $logo = str_replace(['http://localhost/', 'https://seusite.com/'], '', $logo);
    $logo = preg_replace('#^infante_fitness/#', '', $logo);

    if (!str_starts_with($logo, 'uploads/')) {
        $logo = 'uploads/' . ltrim($logo, '/');
    }

    iduSQL("INSERT INTO parcerias (logo, link, nome) VALUES ('$logo', '$link', '$nome')");
    header("Location: parcerias.php");
    exit;
}


?>

<main class="conatiner my-5 text-center">
 

    <script>
      tinymce.init({
        selector: '#texto'
      });
    </script> 

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Nova Parcerias</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="logo">Logo: </label><br>
                <input type="text" name="logo" id="logo" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required style="width:500px;">

                <br><br>

                <label for="link">Link: </label><br>
                <input type="text" name="link" id="link" required style="width:500px;">

                <br><br>

                <input type="submit" value="Novo" class="button">
            </form>
        </div>

    </main>

