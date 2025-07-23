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
        $ext = strtolower(pathinfo($cv_name, PATHINFO_EXTENSION));

        if ($ext !== 'pdf') {
            echo "<p style='color:red; text-align:center;'>O ficheiro deve ser em formato PDF.</p>";
            exit;
        }

        if ($_FILES["cv"]["size"] > 2 * 1024 * 1024) {
            echo "<p style='color:red; text-align:center;'>O ficheiro é demasiado grande. Máx: 2MB.</p>";
            exit;
        }

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'infante.fitness@gmail.com';
            $mail->Password   = 'urbrdjzqofdptvvg';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $nome); 
            $mail->addAddress('infante.fitness@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Candidatura - Recrutamento';
            $mail->Body    = "
                <h3>Nova Candidatura</h3>
                <p><strong>Nome:</strong> $nome</p>
                <p><strong>Email:</strong> $email</p>
            ";
            $mail->AltBody = "Nova Candidatura\nNome: $nome\nEmail: $email";

            $mail->addAttachment($cv_tmp, $cv_name);

            $mail->send();
            header("Location: obrigado.html");
            exit;

        } catch (Exception $e) {
            echo "<p style='color:red; text-align:center;'>Erro ao enviar: {$mail->ErrorInfo}</p>";
        }
    } else {
        echo "<p style='color:red; text-align:center;'>Erro no upload do ficheiro.</p>";
    }
}
?>
