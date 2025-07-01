<?php 

$form = isset($_GET["título"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
if($form){
    $titulo = $_GET["título"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO infante_people (título, texto, imagem) VALUES ('$titulo', '$texto', '$imagem')");
    header("Location: infante_people.php");
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

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

