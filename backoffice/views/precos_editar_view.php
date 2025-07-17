<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $preco_especifico = getPrecoEspecifico($id);
    $form_2 = isset($_GET["imagem"]) && isset($_GET["texto"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $texto = $_GET["texto"];
    
        iduSQL("UPDATE precos SET imagem='$imagem', texto='$texto'  WHERE id = $id");
        header("Location: precos.php");
    }
}
 
?>

<main class="conatiner my-5 text-center">


    <script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Preços Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="imagem">Imagem: </label>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $preco_especifico["imagem"]; ?>">
                <a target="_blank" href="http://localhost/infante_fitness/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $preco_especifico["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

