<?php 

$contactos = getContactos();

$form = isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["link_instagram"]) && isset($_GET["morada"]);
if($form){
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $link_instagram = $_GET["link_instagram"];
    $morada = $_GET["morada"];
    iduSQL("UPDATE contactos SET telefone='$telefone', email='$email', link_instagram='$link_instagram',morada='$morada'");
    header("Location: contactos.php");
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
                <h3>Contactos</h3>
            </div>
        </div>

        <div class="row mx-0 mt-4">
            <form class="col-12">

                <label for="telefone">Telefone: </label><br>
                <textarea name="telefone" id="telefone" ><?= $contactos["telefone"]; ?></textarea>

                <label for="email">E-mail: </label><br>
                <textarea name="email" id="email" ><?= $contactos["email"]; ?></textarea>

                <label for="link_instagram">Instagram: </label><br>
                <textarea name="link_instagram" id="link_instagram" ><?= $contactos["link_instagram"]; ?></textarea>


                <label for="morada">Morada: </label><br>
                <textarea name="morada" id="morada" ><?= $contactos["morada"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar" class="button">
            </form>
        </div>

    </main>
