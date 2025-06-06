<?php 

$form = isset($_GET["título"]) && isset($_GET["texto"]) && isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]);
if($form){
    $titulo = $_GET["título"];
    $texto = $_GET["texto"];
    $imagem_1 = $_GET["imagem_1"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    iduSQL("INSERT INTO empreendimentos (título, texto, imagem_1, imagem_2, imagem_3, imagem_4 ) VALUES ('$titulo', '$texto', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4')");
    header("Location: empreendimentos.php");
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
                <h3>Empreendimento Novo</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="titulo">Título: </label><br>
                <input type="text" name="título" id="título" required style="width:500px;">

                <br><br>

                <?php for ($i = 1; $i <= 4; $i++): ?>

                    <label for="imagem">Imagem <?= $i; ?>: </label><br>
                    <input type="text" name="imagem_<?= $i; ?>" id="imagem<?= $i; ?>" required style="width:500px;">
                    <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>
                    <br>
                <?php endfor; ?>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto"></textarea>
                
                <br><br>

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

