<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        $mail->Password = 'A_TUA_APP_PASSWORD';         // App Password gerada no Gmail
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
