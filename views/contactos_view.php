<?php 

$contactos = getContactos();

require 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Garante que o PHPMailer está incluído

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $assunto = $_POST['assunto'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    if (!$nome || !$email || !$telefone || !$assunto || !$mensagem) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'infante.fitness@gmail.com'; // Email
        $mail->Password = 'SUA-APP-PASSWORD'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('infante.fitness@gmail.com', 'Site Infante Fitness');
        $mail->addAddress('infante.fitness@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de contacto do site';
        $mail->Body = "
            <h3>Mensagem de Contacto</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Assunto:</strong> $assunto</p>
            <p><strong>Mensagem:</strong><br>$mensagem</p>
        ";

        $mail->send();
        header("Location: obrigado.html"); // Redireciona para página de sucesso (opcional)
        exit;

    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
}
?>


<main class="container-fluid p-0"> 

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

                <div class="col-lg-5 ps-4">
                    <form action="enviar_email.php" method="POST" id="contactos_form">
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

                        <p class="preenchimento_obrig">* Campos de preenchimento obrigatório</p>

                        <button type="submit" class="botao botao_contactos_mobile">Enviar</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>


    <div class="row conteudo_simples d-block d-md-none">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="linha_laranja_mobile m-auto"></div>
                </div>
            </div>

            <div class="row">
                <div class="col bem_vindo_mobile">
                    <p>Contactos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row conteudo_simples d-block d-md-none px-4">
        <div class="col">
            <div class="row d-flex flex-column">
                <div class="col textos_contactos_mobile">
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

                <div class="col">
                    <form action="enviar_email.php" method="POST" id="contactos_form_mobile">
                        <label for="nome">*Nome</label> <br>
                        <input type="text" id="nome" name="nome" required>

                        <br>

                        <label for="email">*E-mail</label> <br>
                        <input type="email" id="email" name="email" required>

                        <br>

                        <label for="telefone">*Telefone</label> <br>
                        <input type="text" id="telefone" name="telefone" required>

                        <br>

                        <label for="assunto">*Assunto</label> <br>
                        <input type="text" id="assunto" name="assunto" required>

                        <br>

                        <label for="mensagem">*Mensagem</label> <br>
                        <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem" cols="78" rows="7" required></textarea>

                        <p class="preenchimento_obrig_mobile">* Campos de preenchimento obrigatório</p>

                        <button type="submit" class="botao botao_contactos_mobile">Enviar</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <div class="row w-100 p-0 mx-0 d-none d-sm-block">
        <div class="col p-0 mapa" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%px;height:500px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8
         &q=Avenida+Escritor+Costa+Barreto+3000+Valbom+Portugal"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
    </div>

    <div class="row d-block p-0 m-0 d-sm-none">
        <div class="col p-0 mapa_mobile" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:323px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8
         &q=Avenida+Escritor+Costa+Barreto+3000+Valbom+Portugal"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
    </div>


</main>
