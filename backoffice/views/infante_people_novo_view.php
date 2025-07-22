<?php
$form = isset($_GET["nome"]) && isset($_GET["subtitulo"]) && isset($_GET["formacao"]) && isset($_GET["imagem"]);
if ($form) {
    $nome = $_GET["nome"];
    $subtitulo = $_GET["subtitulo"];
    $formacao = $_GET["formacao"];
    $imagem = $_GET["imagem"];

    // Tratamento da imagem para caminho relativo
    $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
    $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

    if (!str_starts_with($imagem, 'uploads/')) {
        $imagem = 'uploads/' . ltrim($imagem, '/');
    }

    // Inserção na base de dados
    iduSQL("INSERT INTO infante_people (nome, subtitulo, formacao, imagem)
            VALUES ('$nome', '$subtitulo', '$formacao', '$imagem')");

    // Redirecionar
    header("Location: infante_people.php");
    exit;
}
?>




<main class="conatiner my-5 text-center">


    <script>
        tinymce.init({
        selector: '#formacao'
        });
    </script> 

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Novo Coach</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/Infante_Fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required style="width:500px;">

                <br><br>

                <label for="subtitulo">Sub-título: </label><br>
                <input type="text" name="subtitulo" id="subtitulo" required style="width:500px;">


                <br><br>

                <label for="formacao">Fromação: </label><br>
                <textarea name="formacao" id="formacao" cols="120" rows="15"></textarea>
                
                <br><br>

                <input type="submit" value="Novo" class="button">
            </form>
        </div>

    </main>

