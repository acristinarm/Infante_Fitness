<?php 

$centro = getCentroFerias();

$form = isset($_GET["imagem_principal"]) && isset($_GET["imagem_sec_1"]) && isset($_GET["imagem_sec_2"]) && isset($_GET["imagem_sec_3"]) && isset($_GET["imagem_sec_4"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);
if($form){
    $imagem_principal = $_GET["imagem_principal"];
    $imagem_sec_1 = $_GET["imagem_sec_1"];
    $imagem_sec_2 = $_GET["imagem_sec_2"];
    $imagem_sec_3 = $_GET["imagem_sec_3"];
    $imagem_sec_4 = $_GET["imagem_sec_4"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];

    iduSQL("UPDATE centro_ferias SET imagem_principal='$imagem_principal', imagem_sec_1='$imagem_sec_1', imagem_sec_2='$imagem_sec_2', imagem_sec_3='$imagem_sec_3', imagem_sec_4='$imagem_sec_4', titulo='$titulo', texto='$texto'");
    header("Location: centro_ferias.php");
}

?>

<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

<main class="container my-5 text-center">
    <div class="row m-0">
        <div class="col-12">
            <h3>Centro de Férias</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <form class="col-12" method="POST">
            <label for="titulo">Título: </label><br>
            <textarea name="titulo" id="titulo"><?= $centro["titulo"]; ?></textarea>

            <br><br>

            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="texto"><?= $centro["texto"]; ?></textarea>
            
            <br><br>

            <label for="imagem_principal">Imagem Principal: </label><br>
            <input type="text" name="imagem_principal" id="imagem_principal" required style="width:500px;" value="<?= $centro["imagem_principal"]; ?>">
            <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

            <br><br>

            <?php for ($i = 1; $i <= 4; $i++): ?>
                <label for="imagem">Imagem Secundária<?= $i; ?>: </label>
                <input type="text" name="imagem_sec_<?= $i; ?>" id="imagem_sec_<?= $i; ?>" required style="width:500px;"
                    value="<?= $centro["imagem_sec_$i"]; ?>">
                <a target="_blank"
                    href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor
                    de Ficheiros</a>
                <br>
            <?php endfor; ?>


            <br><br>
            <input type="submit" value="Editar">
        </form>
    </div>
</main>
