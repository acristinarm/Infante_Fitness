<?php 

$form = isset($_GET["título"]) && isset($_GET["texto"]) && isset($_GET["imagem"]) && isset($_GET["mostrar_home"]);
if($form){
    $titulo = $_GET["título"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    $mostrar_home = $_GET["mostrar_home"];
    iduSQL("INSERT INTO destaques (título, texto, imagem, mostrar_home) VALUES ('$titulo', '$texto', '$imagem', '$mostrar_home')");
    header("Location: destaques.php");
}

?>

<main class="conatiner my-5 text-center">


    <script>
      tinymce.init({
        selector: '#texto'
      });
    </script>

    <main class="conatiner my-5 text-center">

        <div class="row m-0">
            <div class="col-12">
                <h3>Destaque Novo</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="titulo">Título: </label><br>
                <input type="text" name="título" id="título" required style="width:500px;">

                <br><br>

                <label for="mostrar_home">Mostrar na Home:</label><br>
                <select name="mostrar_home" id="mostrar_home">
                    <option value="1">SIM</option>
                    <option value="0">NÃO</option>
                </select>

                <br><br>

                <label for="imagem">Imagem: </label><br>
                <input type="text" name="imagem" id="imagem" required style="width:500px;"><br>
                <a target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager-master/tinyfilemanager.php?p=">Gestor de Ficheiros</a>

                <br><br>

                <label for="texto">Texto: </label><br>
                <textarea name="texto" id="texto"></textarea>
                
                <br><br>

                <input type="submit" value="Novo">
            </form>
        </div>

    </main>

