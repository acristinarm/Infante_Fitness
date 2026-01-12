<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="uploads/logo_sem_fundo.png" sizes="64x64" type="image/png">

    <!-- Título que aparece no Google -->
    <title>Infante Fitness | Treino, Hyrox, Crossfit e Bem-Estar</title>

    <!-- Meta description (resumo que aparece por baixo do título no Google) -->
    <meta name="description" content="Infante Fitness é uma box dedicada ao treino funcional, Hyrox, CrossFit e bem-estar físico. Junta-te a uma comunidade ativa e determinada!">

    <!-- Palavras-chave (menos usado atualmente, mas não prejudica) -->
    <meta name="keywords" content="Infante Fitness, CrossFit, Hyrox, Treino, Ginásio, Porto, Treino Funcional">

    <!-- Robots (pede ao Google para indexar) -->
    <meta name="robots" content="index, follow">

    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JAVASCRIPT -->
    <script src="main.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: rgb(1, 11, 21); 
        }
    </style>
</head>


<body>

    <header>
        <div class="row header-links">
            <div class="col"> 
                <img src="uploads/logo_branco.png" alt="Logo" style="height: 90px;">
            </div>
        </div>
    </header>

    <main class="container main_links"> 
 
        <section id="candidatura" class="py-5" style="background-color:rgba(1, 11, 21, 0.93); color: #fff;">
            <div class="container">
                <h2 class="text-center mb-3" style="font-size: 2.2rem; font-weight: bold; color: rgb(63, 205, 205);">
                    Envia-nos a tua Candidatura
                </h2>
                <p class="text-center mb-4" style="font-size: 1.1rem;">
                    Preenche os dados e envia o teu CV em PDF.
                </p>

                <form id="formCandidatura" action="enviar_candidatura.php" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <input type="text" name="nome" id="nome" placeholder="Nome *" required
                            class="form-control"
                            style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" id="email" placeholder="Email *" required
                            class="form-control"
                            style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
                    </div>

                    <div class="mb-3">
                        <input type="file" name="cv" id="cv" accept=".pdf" required
                            class="form-control"
                            style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;"/>
                    </div>

                    <!-- 🔹 reCAPTCHA v3 token -->
                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                    <div class="text-center mb-3">
                        <small>Os campos assinalados com * são obrigatórios</small>
                    </div>

                    <button type="submit" class="btn w-100 mt-3"
                        style="background-color:rgb(63, 205, 205); color: #fff; font-weight: bold; padding: 1rem;">
                        Enviar Candidatura
                    </button>
                </form>
            </div>
        </section>

        <!-- reCAPTCHA v3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LcLecgrAAAAAIPzsKdH5IfxGyX4tQzxLRWnw00G"></script>
        <script>
        grecaptcha.ready(function() {
            document.getElementById('formCandidatura').addEventListener('submit', function(e) {
                e.preventDefault(); // espera token
                grecaptcha.execute('6LcLecgrAAAAAIPzsKdH5IfxGyX4tQzxLRWnw00G', {action: 'candidatura'}).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    e.target.submit(); // envia o form
                });
            });
        });
        </script>

    </main>

</body>


</html>