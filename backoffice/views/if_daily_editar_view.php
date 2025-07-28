<?php 

$daily = getIF_DAILY();

$form = isset($_GET["texto"]) && isset($_GET["tempo"]) && isset($_GET["descricao"]) && isset($_GET["pessoas"]);
if($form){
    $texto = $_GET["texto"];
    $tempo = $_GET["tempo"];
    $descricao = $_GET["descricao"];
    $pessoas = $_GET["pessoas"];
    iduSQL("UPDATE if_daily SET texto='$texto', tempo='$tempo', descricao='$descricao', pessoas='$pessoas'");
    header("Location: if_daily.php");
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
                <h3>IF Daily</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto" ><?= $daily["texto"]; ?></textarea>

                <br><br>

                <label for="tempo">Tempo: </label><br>
                <select name="tempo" id="tempo">
                    <?php
                    for ($i = 10; $i <= 90; $i += 5) {
                        $selected = ($daily["tempo"] == $i) ? "selected" : "";
                        echo "<option value='$i' $selected>$i minutos</option>";
                    }
                    ?>
                </select>

                <br><br>

                <label for="descricao">Descrição: </label><br>
                <textarea name="descricao" id="descricao" ><?= $daily["descricao"]; ?></textarea>

                <br><br>

                <label for="pessoas">Pessoas: </label><br>
                <select name="pessoas" id="pessoas">
                    <?php
                    for ($i = 5; $i <= 30; $i += 1) {
                        $selected = ($daily["pessoas"] == $i) ? "selected" : "";
                        echo "<option value='$i' $selected>$i pessoas</option>";
                    }
                    ?>
                </select>

                <br><br>

                <input type="submit" value="Editar" class="button">
            </form>
        </div>

    </main>
