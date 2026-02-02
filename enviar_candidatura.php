<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1️⃣ Validar reCAPTCHA v3
    $recaptcha = $_POST['g-recaptcha-response'] ?? '';
    $secret = $_ENV['RECAPTCHA_SECRET_KEY'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
    $responseKeys = json_decode($response, true);

    // Verifica sucesso e score >= 0.5
    if (empty($responseKeys["success"]) || ($responseKeys["score"] ?? 0) < 0.7) {
        die("<p style='color:red; text-align:center;'>Verificação de reCAPTCHA falhou. Tenta novamente.</p>");
    }

    // 2️⃣ Sanitização
    $nome  = htmlspecialchars(trim($_POST["nome"] ?? ''));
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);

    if (!$nome || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<p style='color:red; text-align:center;'>Dados inválidos.</p>");
    }

    // 3️⃣ Bloqueio de palavras suspeitas
    $bloqueadas = ["seo", "traffic", "viagra", "casino", "bitcoin", "marketing"];
    $textoCheck = strtolower($nome . " " . $email);
    foreach ($bloqueadas as $palavra) {
        if (strpos($textoCheck, $palavra) !== false) {
            die("<p style='color:red; text-align:center;'>Mensagem bloqueada por conter termos de spam.</p>");
        }
    }

    // 4️⃣ Verificação do ficheiro PDF
    if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] !== UPLOAD_ERR_OK) {
        die("<p style='color:red; text-align:center;'>Erro no upload do ficheiro.</p>");
    }

    $cv_tmp  = $_FILES["cv"]["tmp_name"];
    $cv_name = basename($_FILES["cv"]["name"]);
    $cv_size = $_FILES["cv"]["size"];
    $ext     = strtolower(pathinfo($cv_name, PATHINFO_EXTENSION));

    if ($ext !== "pdf") {
        die("<p style='color:red; text-align:center;'>O ficheiro deve ser em PDF.</p>");
    }
    if ($cv_size > 2 * 1024 * 1024) {
        die("<p style='color:red; text-align:center;'>O ficheiro é demasiado grande. Máx: 2MB.</p>");
    }

    // 5️⃣ Envio com PHPMailer
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'infante.fitness@gmail.com';
        $mail->Password   = $_ENV['EMAIL_PASSWORD']; // app password Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($email, $nome);
        $mail->addAddress('infante.fitness@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Candidatura - Recrutamento';
        $mail->Body    = "<h3>Nova Candidatura</h3><p><strong>Nome:</strong> $nome</p><p><strong>Email:</strong> $email</p>";
        $mail->AltBody = "Nova Candidatura\nNome: $nome\nEmail: $email";

        $mail->addAttachment($cv_tmp, $cv_name);

        $mail->send();
        header("Location: obrigado.html");
        exit;

    } catch (Exception $e) {
        echo "<p style='color:red; text-align:center;'>Erro ao enviar a mensagem. Tente novamente mais tarde.</p>";
    }
}
?>
