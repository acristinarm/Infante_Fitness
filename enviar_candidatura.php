<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? '';
    $email = $_POST["email"] ?? '';

    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] === UPLOAD_ERR_OK) {
        $cv_tmp = $_FILES["cv"]["tmp_name"];
        $cv_name = $_FILES["cv"]["name"];

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'infante.fitness@gmail.com';
            $mail->Password   = 'tua_app_password';   // <-- usa uma App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $nome); 
            $mail->addAddress('infante.fitness@gmail.com'); 

            $mail->Subject = 'Candidatura - Recrutamento';
            $mail->Body    = "Recebeste uma nova candidatura.\n\nNome: $nome\nEmail: $email";
            $mail->addAttachment($cv_tmp, $cv_name);

            $mail->send();
            echo "<p style='text-align:center; margin-top:2rem;'>Candidatura enviada com sucesso!</p>";
        } catch (Exception $e) {
            echo "<p style='color:red; text-align:center;'>Erro ao enviar: {$mail->ErrorInfo}</p>";
        }
    } else {
        echo "<p style='color:red; text-align:center;'>Erro no upload do ficheiro.</p>";
    }
}
?>
