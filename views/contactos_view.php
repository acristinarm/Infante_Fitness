<?php 
$contactos = getContactos();
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!empty($_POST['website'])) {
        die("Bot detectado. Acesso negado.");
    }

    // 2. VERIFICAÇÃO DO RECAPTCHA V3 
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $_ENV['RECAPTCHA_SECRET_KEY']; 
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    $response = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $responseKeys = json_decode($response, true);

    // Se a validação falhar ou o score for baixo (humano < 0.5 > bot)
    if (!$responseKeys["success"] || $responseKeys["score"] < 0.5) {
        die("Erro de segurança: O sistema detectou uma atividade suspeita. Se for humano, tente novamente.");
    }

    // 3. CAPTURA E LIMPEZA DE DADOS
    $nome     = strip_tags(trim($_POST['nome'] ?? ''));
    $email    = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefone = strip_tags(trim($_POST['telefone'] ?? ''));
    $assunto  = strip_tags(trim($_POST['assunto'] ?? ''));
    $mensagem = strip_tags(trim($_POST['mensagem'] ?? ''));

    if (!$nome || !$email || !$telefone || !$assunto || !$mensagem) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    // 4. ENVIO DO E-MAIL
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'infante.fitness@gmail.com';
        $mail->Password   = $_ENV['EMAIL_PASSWORD']; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('infante.fitness@gmail.com', 'Site Infante Fitness');
        $mail->addAddress('infante.fitness@gmail.com');
        $mail->addReplyTo($email, $nome); 

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de contacto do site: ' . $assunto;
        $mail->Body    = "
            <h3>Nova Mensagem de Contacto</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Assunto:</strong> $assunto</p>
            <p><strong>Mensagem:</strong><br>" . nl2br($mensagem) . "</p>
        ";

        $mail->send();
        header("Location: obrigado.html");
        exit;

    } catch (Exception $e) {
        error_log("Erro PHPMailer: {$mail->ErrorInfo}"); 
        echo "Lamentamos, ocorreu um erro técnico. Por favor, tente mais tarde.";
    }
}
?>

<main class="container-fluid p-0"> 

    <!-- Desktop -->
    <div class="row conteudo_simples d-none d-md-block mx-0">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="linha_laranja m-auto"></div>
                </div>
            </div>
            <div class="row">
                <div class="col bem_vindo">
                    <p>Contactos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row conteudo_simples d-none d-md-block px-4 m-0">
        <div class="col">
            <div class="row d-flex flex-row justify-content-center">
                <!-- Contact info -->
                <div class="col-lg-3 textos_contactos d-flex flex-column justify-content-center align-items-start" style="min-height: 100%;">
                    <div class="w-100 text-center pb-5">
                        <p class="logo_infante">Infante</p>
                        <p class="logo_fitness">fitness</p>
                    </div>
                    <p class="contactos_azul">Morada</p>
                    <div class="contactos_editavel"><?= $contactos["morada"]; ?></div>
                    <p class="contactos_azul">Telefone</p>
                    <div class="fw-normal contactos_editavel"><?= $contactos["telefone"]; ?></div>
                    <p class="contactos_azul">E-mail </p>
                    <div class="fw-normal contactos_editavel">
                        <a href="mailto:<?= $contactos['email']; ?>" target="_blank">
                            <?= $contactos['email']; ?>
                        </a>
                    </div>
                </div>

                <!-- Formulário desktop -->
                <div class="col-lg-5 ps-4">
                    <form action="enviar_email.php" method="POST" id="contactos_form">
                        <!-- HONEYPOT FIELD (Para combater robôs) -->
                        <input type="text" name="website" 
                               style="position: absolute; left: -9999px; opacity: 0; height: 0; width: 0; border: none; padding: 0;">
                        <!-- FIM HONEYPOT -->

                        <label for="nome">*Nome</label><br>
                        <input type="text" id="nome" name="nome" required><br>

                        <label for="email">*E-mail</label><br>
                        <input type="email" id="email" name="email" required><br>

                        <label for="telefone">*Telefone</label><br>
                        <input type="tel" id="telefone" name="telefone" required><br>

                        <label for="assunto">*Assunto</label><br>
                        <input type="text" id="assunto" name="assunto" required><br>

                        <label for="mensagem">*Mensagem</label><br>
                        <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem" required></textarea>

                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-desktop">

                        <p class="preenchimento_obrig">* Campos de preenchimento obrigatório</p>

                        <button type="submit" class="btn btn-outline-dark px-4 py-2">Enviar</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile -->
    <div class="row conteudo_simples d-block d-md-none px-4">
        <div class="col">
            <div class="row d-flex flex-column">
                <!-- Contact info mobile -->
                <div class="col textos_contactos_mobile mb-4">
                    <div class="w-100 text-center pb-3">
                        <p class="logo_infante_mobile">Infante</p>
                        <p class="logo_fitness_mobile">fitness</p>
                    </div>
                    <p class="contactos_azul_mobile">Morada</p>
                    <div class="contactos_editavel_mobile"><?= $contactos["morada"]; ?></div>
                    <p class="contactos_azul_mobile">Telefone</p>
                    <div class="fw-normal text-lowercase contactos_editavel_mobile"><?= $contactos["telefone"]; ?></div>
                    <p class="contactos_azul_mobile">E-mail </p>
                    <div class="fw-normal text-lowercase contactos_editavel_mobile"><?= $contactos["email"]; ?></div>
                </div>

                <!-- Formulário mobile -->
                <div class="col">
                    <form action="enviar_email.php" method="POST" id="contactos_form_mobile">
                        <!-- HONEYPOT FIELD (Para combater robôs) -->
                        <input type="text" name="website" 
                               style="position: absolute; left: -9999px; opacity: 0; height: 0; width: 0; border: none; padding: 0;">
                        <!-- FIM HONEYPOT -->

                        <label for="nome">*Nome</label> <br>
                        <input type="text" id="nome" name="nome" required><br>

                        <label for="email">*E-mail</label> <br>
                        <input type="email" id="email" name="email" required><br>

                        <label for="telefone">*Telefone</label> <br>
                        <input type="text" id="telefone" name="telefone" required><br>

                        <label for="assunto">*Assunto</label> <br>
                        <input type="text" id="assunto" name="assunto" required><br>

                        <label for="mensagem">*Mensagem</label> <br>
                        <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem" cols="78" rows="7" required></textarea>

                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-mobile">

                        <p class="preenchimento_obrig_mobile">* Campos de preenchimento obrigatório</p>

                        <button type="submit" class="btn btn-outline-dark enviar_mobile"><p>Enviar</p></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6LfodEgsAAAAABltD8WoIALHr5_pAonPJ7h_Fbr-"></script>
<script>
grecaptcha.ready(function() {
    // Desktop
    document.getElementById('contactos_form').addEventListener('submit', function(e) {
        e.preventDefault();
        grecaptcha.execute('6LfodEgsAAAAABltD8WoIALHr5_pAonPJ7h_Fbr-', {action: 'contacto'}).then(function(token) {
            document.getElementById('g-recaptcha-response-desktop').value = token;
            e.target.submit();
        });
    });

    // Mobile
    document.getElementById('contactos_form_mobile').addEventListener('submit', function(e) {
        e.preventDefault();
        grecaptcha.execute('6LfodEgsAAAAABltD8WoIALHr5_pAonPJ7h_Fbr-', {action: 'contacto'}).then(function(token) {
            document.getElementById('g-recaptcha-response-mobile').value = token;
            e.target.submit();
        });
    });
});
</script>

    <div class="row w-100 p-0 mx-0 d-none d-sm-block">
        <div class="col p-0 mapa" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%px;height:500px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8
             &q=Avenida+Escritor+Costa+Barreto+3000+Valbom+Portugal"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
    </div>

    <div class="row d-block p-0 m-0 d-sm-none">
        <div class="col p-0 mapa_mobile" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:323px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8
             &q=Avenida+Escritor+Costa+Barreto+3000+Valbom+Portugal"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
    </div>


</main>

