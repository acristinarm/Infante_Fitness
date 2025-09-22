<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$recaptcha = $_POST['g-recaptcha-response'] ?? '';
$secret = "6LcLecgrAAAAAGH4tUE6bIB5HPbvR1iRAiO9Uqa8";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
$responseKeys = json_decode($response, true);

if (empty($responseKeys["success"]) || ($responseKeys["score"] ?? 0) < 0.5) {
    die("<p style='color:red; text-align:center;'>Verificação de reCAPTCHA falhou. Tenta novamente.</p>");
}


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
        $mail->Username = 'infante.fitness@gmail.com'; 
        $mail->Password = 'urbrdjzqofdptvvg';         // App Password gerada no Gmail
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
        header("Location: obrigado.html");
        exit;

    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
} else {
    echo "Método inválido.";
}
?>
