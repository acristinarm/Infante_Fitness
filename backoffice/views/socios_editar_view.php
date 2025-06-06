<?php 

$socios = getSocios();

$form = isset($_GET["texto"]);
if($form){
    $texto = $_GET["texto"];
    iduSQL("UPDATE socios SET texto='$texto'");
    header("Location: socios.php");
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
                <h3>Sócios</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $socios["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>
