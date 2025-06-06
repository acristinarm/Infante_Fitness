<?php 

$contactos = getContactos();

$form = isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["morada"]) && isset($_GET["link_facebook"]);
if($form){
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $morada = $_GET["morada"];
    $link_facebook = $_GET["link_facebook"];
    iduSQL("UPDATE contactos SET telefone='$telefone', email='$email', morada='$morada', link_facebook='$link_facebook'");
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

                <label for="morada">Morada: </label><br>
                <textarea name="morada" id="morada" ><?= $contactos["morada"]; ?></textarea>

                <label for="facebook">Facebook: </label><br>
                <textarea name="link_facebook" id="facebook" ><?= $contactos["link_facebook"]; ?></textarea>
                
                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>

    </main>
