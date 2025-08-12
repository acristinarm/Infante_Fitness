<?php 

$form = isset($_GET["imagem"]) && isset($_GET["nome"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $nome = $_GET["nome"];
    $texto = $_GET["texto"];

    // Tratamento da imagem para caminho relativo
    $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
    $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

    if (!str_starts_with($imagem, 'uploads/')) {
        $imagem = 'uploads/' . ltrim($imagem, '/');
    }

    iduSQL("INSERT INTO servicos (imagem, nome, texto) VALUES ('$imagem', '$nome', '$texto')");
    header("Location: servicos_home.php");
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
                <h3>Novo Serviço</h3>
            </div>
        </div>
 
        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required style="width:500px;">

                <br><br>

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"></textarea>

                
                <br><br>

                <input type="submit" value="Novo" class="button">
            </form>
        </div>

    </main>

