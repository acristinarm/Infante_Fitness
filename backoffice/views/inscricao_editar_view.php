<?php  

$inscricao = getInscricao();

$form = isset($_GET["imagem"]);
if($form){
    $imagem = $_GET["imagem"];

    // Tratamento da imagem para caminho relativo
    $imagem = str_replace(['http://localhost/', 'https://seusite.com/'], '', $imagem);
    $imagem = preg_replace('#^infante_fitness/#', '', $imagem);

    if (!str_starts_with($imagem, 'uploads/')) {
        $imagem = 'uploads/' . ltrim($imagem, '/');
    }

    iduSQL("UPDATE inscricao SET imagem='$imagem'");
    header("Location: inscricao.php");
    exit;
}

?>


?>

    <script>
      tinymce.init({
        selector: '#texto'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Inscrição</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">

            <form class="col-12">

                <label for="imagem">Imagem: </label>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $inscricao["imagem"]; ?>">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>
                
                <br><br>

                <input type="submit" value="Editar" class="button">
            </form>
        </div>

    </main>
