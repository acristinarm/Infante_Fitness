<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $banner_especifico = getBannerEspecifico($id);
    $form_2 = isset($_GET["imagem"]);
    if($form_2){
        $imagem = $_GET["imagem"];

        iduSQL("UPDATE banners SET imagem='$imagem' WHERE id=$id");
        header("Location: banners.php");
    }
}

?>

<main class="conatiner my-5 text-center">


    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Banner <?= $banner_especifico ["nome"]; ?> - Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $banner_especifico ["imagem"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

