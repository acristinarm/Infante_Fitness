<?php 

$quem_somos = getQuemSomos();

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE quem_somos SET imagem='$imagem', texto='$texto'");
    header("Location: quem_somos.php");
}

?>

    <script>
      tinymce.init({
        selector: '#texto'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Quem Somos</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $quem_somos["imagem"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="imagem">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $quem_somos["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>
