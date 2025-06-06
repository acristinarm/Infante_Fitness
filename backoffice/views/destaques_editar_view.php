<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
    $form_2 = isset($_GET["imagem"]) && isset($_GET["título"]) && isset($_GET["texto"]) && isset($_GET["mostrar_home"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["título"];
        $texto = $_GET["texto"];
        $mostrar_home = $_GET["mostrar_home"];
    
        iduSQL("UPDATE destaques SET imagem='$imagem', título='$titulo', texto='$texto', mostrar_home='$mostrar_home' WHERE id = $id");
        header("Location: destaques.php");
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
                <h3>Destaques Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="titulo">Título: </label>
                <input type="text" name="título" id="título" required style="width:500px;" value="<?= $destaque_especifico["título"]; ?>">

                <br><br> 

                <label for="imagem">Imagem: </label>
                <input type="text" name="imagem" id="imagem" required style="width:500px;" value="<?= $destaque_especifico["imagem"]; ?>">
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="mostrar_home">Mostrar na Home:</label><br>
                <select name="mostrar_home" id="mostrar_home">
                    <option value="1" <?= ($destaque_especifico["mostrar_home"] == 1) ? "selected" : ""; ?>>SIM</option>
                    <option value="0" <?= ($destaque_especifico["mostrar_home"] == 0) ? "selected" : ""; ?>>NÃO</option>
                </select>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $destaque_especifico["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

