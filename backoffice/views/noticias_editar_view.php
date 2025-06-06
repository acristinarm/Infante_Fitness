<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $noticia_especifica = getNoticiasEspecificas($id);
    $form_2 = isset($_GET["imagem"]) && isset($_GET["título"]) && isset($_GET["texto"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["título"];
        $texto = $_GET["texto"];
    
        iduSQL("UPDATE noticias SET imagem='$imagem', título='$titulo', texto='$texto' WHERE id = $id");
        header("Location: noticias.php");
    }
}

?>

<main class="conatiner my-5 text-center">


    <script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Notícia <?= $noticia_especifica["id"]; ?> - Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $noticia_especifica["imagem"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="titulo">Título: </label><br>
                <textarea name="título" id="titulo" cols="120" rows="15"><?= $noticia_especifica["título"]; ?></textarea>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $noticia_especifica["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

