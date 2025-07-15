<?php 

$horarios = getHorarios();

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $texto = $_GET["texto"];
    $imagem = str_replace("C:/xampp/htdocs", "", $_GET["imagem"]);
    iduSQL("UPDATE horarios SET imagem='$imagem', texto='$texto'");
    header("Location: horarios.php");
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
                <h3>Horários</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">

            <form class="col-12">

                <label for="imagem">Imagem: </label>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $horarios["imagem"]; ?>">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>


                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $horarios["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>
