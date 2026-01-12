<?php 

if (isset($_GET["imagem"])) {
    $imagem = $_GET["imagem"];

    // Remove domínio e caminho raiz local e online, para deixar só o caminho relativo
    $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
    $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

    // Garante que comece com uploads/
    if (!str_starts_with($imagem, 'uploads/')) {
        $imagem = 'uploads/' . ltrim($imagem, '/');
    }

    iduSQL("INSERT INTO carousel (imagem) VALUES ('$imagem')");
    header("Location: carousel.php");
    exit;
}

?>

<main class="conatiner my-5 text-center">

    <div class="row m-0">
        <div class="col-12">
            <h3>Carousel Novo</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <form class="col-12" method="GET">

            <label for="imagem">Imagem: </label><br>
            <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
            <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <input type="submit" value="Novo" class="button">
        </form>
    </div>

</main>
