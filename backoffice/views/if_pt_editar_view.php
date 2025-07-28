<?php 

$pt = getIF_PT();

$form = isset($_GET["texto"]) && isset($_GET["tempo"]) && isset($_GET["descricao"]) && isset($_GET["pessoas"]) && isset($_GET["assiduidade"]);
if($form){
    $texto = $_GET["texto"];
    $tempo = $_GET["tempo"];
    $descricao = $_GET["descricao"];
    $pessoas = $_GET["pessoas"];
    $assiduidade = $_GET["assiduidade"];
    iduSQL("UPDATE if_pt SET texto='$texto', tempo='$tempo', descricao='$descricao', pessoas='$pessoas', assiduidade='$assiduidade'");
    header("Location: if_pt.php");
}

?>

    <script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>IF PT</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" ><?= $pt["texto"]; ?></textarea>

                <br><br>

                <label for="tempo">Tempo: </label><br>
                <select name="tempo" id="tempo">
                    <?php
                    for ($i = 10; $i <= 90; $i += 5) {
                        $selected = ($pt["tempo"] == $i) ? "selected" : "";
                        echo "<option value='$i' $selected>$i minutos</option>";
                    }
                    ?>
                </select>

                <br><br>

                <label for="descricao">Descrição: </label><br>
                <textarea name="descricao" id="descricao" ><?= $pt["descricao"]; ?></textarea>

                <br><br>

                <label for="pessoas">Pessoas: </label><br>
                <select name="pessoas" id="pessoas">
                    <?php
                    for ($i = 1; $i <= 5; $i += 1) {
                        $selected = ($pt["pessoas"] == $i) ? "selected" : "";
                        echo "<option value='$i' $selected>$i pessoas</option>";
                    }
                    ?>
                </select>

                <br><br>

                <label for="assiduidade">Vezes/ Semana: </label><br>
                <select name="assiduidade" id="assiduidade">
                    <?php
                    for ($i = 1; $i <= 5; $i += 1) {
                        $selected = ($pt["assiduidade"] == $i) ? "selected" : "";
                        echo "<option value='$i' $selected>$i vezes</option>";
                    }
                    ?>
                </select>


                <br><br>

                <input type="submit" value="Editar" class="button">
            </form>
        </div>

    </main>
