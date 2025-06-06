<?php 

$form = isset($_GET["imagem"]);
if($form){
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO carousel (imagem) VALUES ('$imagem')");
    header("Location: carousel.php");
}

?>

<main class="conatiner my-5 text-center">

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Carousel Novo</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>
                
                <br><br>

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

