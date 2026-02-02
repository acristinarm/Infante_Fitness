<?php 

$form = isset($_GET["imagem_antes"]) && isset($_GET["imagem_depois"]) && isset($_GET["texto"]) && isset($_GET["nome"]);

if($form){
    $imagem_antes = $_GET["imagem_antes"];
    $imagem_depois = $_GET["imagem_depois"];
    $texto = $_GET["texto"];
    $nome = $_GET["nome"];

    $imagem_antes = str_replace(['http://localhost/infante_fitness/', 'https://seusite.com/'], '', $imagem_antes);
    $imagem_depois = str_replace(['http://localhost/infante_fitness/', 'https://seusite.com/'], '', $imagem_depois);

    // Garante que começam com "uploads/"
    if (!str_starts_with($imagem_antes, 'uploads/')) {
        $imagem_antes = 'uploads/' . ltrim($imagem_antes, '/');
    }
    if (!str_starts_with($imagem_depois, 'uploads/')) {
        $imagem_depois = 'uploads/' . ltrim($imagem_depois, '/');
    }

    // Inserir na BD
    iduSQL("INSERT INTO testemunhos (imagem_antes, imagem_depois, texto, nome) 
            VALUES ('$imagem_antes', '$imagem_depois', '$texto', '$nome')");

    header("Location: testemunhos.php");
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
                <h3>Testemunho Novo</h3>
            </div>
        </div>
 
        <div class="row mx-0 mt-4">
            <form class="col-12" method="GET">

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required style="width:500px;">

                <br><br>

                <label for="imagem_antes">Imagem Antes: </label><br>
                <input type="text" name="imagem_antes" id="imagem_antes" required style="width:500px;">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>

                <br><br>

                <label for="imagem_depois">Imagem Depois: </label><br>
                <input type="text" name="imagem_depois" id="imagem_depois" required style="width:500px;">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"></textarea>

                <br><br>

                <input type="submit" value="Novo" class="button">
            </form>
        </div>

    </main>

