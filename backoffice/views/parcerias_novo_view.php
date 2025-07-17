<?php 

$form = isset($_GET["logo"]) && isset($_GET["link"]) && isset($_GET["nome"]);
if($form){
    $logo = $_GET["logo"];
    $link = $_GET["link"];
    $nome = $_GET["nome"];
    iduSQL("INSERT INTO parcerias (logo, link, nome) VALUES ('$logo', '$link', '$nome')");
    header("Location: parcerias.php");
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

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

