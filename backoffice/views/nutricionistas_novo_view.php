<?php 

$form = isset($_GET["nome"]) && isset($_GET["formacao"]) && isset($_GET["imagem"]);
if($form){
    $nome = $_GET["nome"];
    $formacao = $_GET["formacao"];
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO nutricionistas (nome, formacao, imagem) VALUES ('$nome', '$formacao', '$imagem')");
    header("Location: nutricionistas.php");
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
                <h3>Nutricionista Novo</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required style="width:500px;">

                <br><br>

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="formacao">Formação: </label><br>
                <textarea name="formacao" id="formacao" cols="120" rows="15"></textarea>

                
                <br><br>

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

