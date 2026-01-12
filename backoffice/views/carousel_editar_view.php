<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $carousel_especifico = getCarouselEspecifico($id);
    if (isset($_GET["imagem"])) {
        $imagem = $_GET["imagem"];

        // Remove domínio e caminho raiz
        $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
        $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

        // Garante que comece com uploads/
        if (!str_starts_with($imagem, 'uploads/')) {
            $imagem = 'uploads/' . ltrim($imagem, '/');
        }

        iduSQL("UPDATE carousel SET imagem='$imagem' WHERE id=$id");
        header("Location: carousel.php");
        exit;
    }
} else { 
    // Se não tiver id, redireciona ou trata o erro
    header("Location: carousel.php");
    exit;
}

?>

<main class="conatiner my-5 text-center">


    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Carousel Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $carousel_especifico["imagem"]; ?>">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <input type="submit" value="Editar" class="button">
            </form>
        </div>

    </main>

