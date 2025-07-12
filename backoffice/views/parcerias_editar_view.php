<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $parceria_especifica = getParceriaEspecifica($id);
    $form_2 = isset($_GET["logo"]) && isset($_GET["nome"]) && isset($_GET["link"]);
    if($form_2){
        $logo = $_GET["logo"];
        $nome = $_GET["nome"];
        $link = $_GET["link"];
    
        iduSQL("UPDATE parcerias SET logo='$logo', nome='$nome', link='$link' WHERE id = $id");
        header("Location: parcerias.php");
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
                <h3>Parcerias <?= $parceria_especifica["id"]; ?> - Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">
 
                <label for="logo">Logo: </label><br>
                <input type="text" name="logo" id="logo" required style="width:500px;" value="<?= $parceria_especifica["logo"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="nome">Nome: </label><br>
                <textarea name="nome" id="nome" cols="120" rows="15"><?= $parceria_especifica["nome"]; ?></textarea>

                <label for="link">link: </label><br>
                <textarea name="link" id="link" cols="120" rows="15"><?= $parceria_especifica["link"]; ?></textarea>

                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

