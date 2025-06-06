<?php 


require_once("../requisicoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);
if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $esta_logado = fazerLogin($login, $senha);
    if($esta_logado){header("Location: home.php");}
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style_backoffice.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JS TINYMCE (EDITOR TEXTO) -->
    <script src="https://cdn.tiny.cloud/1/cxcasgrsau34b9mwptjxh6nebdr2m9egf4d345kcbr2qk545/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

    <main class="container my-5">

        <div class="row ">
            <form class="col-12 text-center" method="POST">

                <h3>Login</h3>

                <?php if($form): ?>

                    <h5 class="text-danger">LOGIN INVÁLIDO!</h5>

                <?php endif; ?>

                <input type="text" name="login" placeholder="Login" class="text-center" autofocus required>
                <br><br>
                <input type="password" name="senha" placeholder="Senha" class="text-center" required>
                <br><br>
                <input type="submit" value="Entrar">

            </form>
        </div>

    </main>

</body>

</html>
