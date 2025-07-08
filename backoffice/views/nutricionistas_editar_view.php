<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $nutri_especifico = getNutriEspecifico($id);
    $form_2 = isset($_GET["imagem"]) && isset($_GET["nome"]) && isset($_GET["formacao"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $nome = $_GET["nome"];
        $formacao = $_GET["formacao"];
    
        iduSQL("UPDATE nutricionistas SET imagem='$imagem', nome='$nome', formacao='$formacao'  WHERE id = $id");
        header("Location: nutricionistas.php");
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
                <h3>Nutricionista Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="nome">Nome: </label>
                <textarea name="nome" id="nome" cols="120" rows="15"><?= $nutri_especifico["nome"]; ?></textarea>


                <br><br> 

                <label for="imagem">Imagem: </label>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $nutri_especifico["imagem"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="formacao">Formação: </label><br>
                <textarea name="formacao" id="formacao" cols="120" rows="15"><?= $nutri_especifico["formacao"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

