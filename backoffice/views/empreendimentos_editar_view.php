<?php 

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $empreendimento_especifico = getEmpreendimentoEspecifico($id);
    $form_2 = isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]) && isset($_GET["título"]) && isset($_GET["texto"]);
    if($form_2){
        $imagem_1 = $_GET["imagem_1"];
        $imagem_2 = $_GET["imagem_2"];
        $imagem_3 = $_GET["imagem_3"];
        $imagem_4 = $_GET["imagem_4"];
        $titulo = $_GET["título"];
        $texto = $_GET["texto"];
    
        iduSQL("UPDATE empreendimentos SET imagem_1='$imagem_1', imagem_2='$imagem_2', imagem_3='$imagem_3', imagem_4='$imagem_4', título='$titulo', texto='$texto' WHERE id = $id");
        header("Location: empreendimentos.php");
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
                <h3>Empreendimentos Editar</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="titulo">Título: </label>
                <input type="text" name="título" id="título" required style="width:500px;" value="<?= $empreendimento_especifico["título"]; ?>">

                <br><br> 

                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <label for="imagem">Imagem <?= $i; ?>: </label>
                    <input type="text" name="imagem_<?= $i; ?>" id="imagem_<?= $i; ?>" required style="width:500px;"
                        value="<?= $empreendimento_especifico["imagem_$i"]; ?>">
                    <a target="_blank"
                        href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor
                        de Ficheiros</a>
                    <br>
                <?php endfor; ?>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" cols="120" rows="15"><?= $empreendimento_especifico["texto"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

