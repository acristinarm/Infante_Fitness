<?php
// --- CONFIGURAÇÕES DE SEGURANÇA ---
// Sua chave secreta do reCAPTCHA v3
const RECAPTCHA_SECRET_KEY = "6LcLecgrAAAAAGH4tUE6bIB5HPbvR1iRAiO9Uqa8"; 
// Ação definida no seu JavaScript (precisa coincidir com o .execute())
const RECAPTCHA_ACTION = 'contacto'; 
// Aumentar o mínimo para ser mais rigoroso contra spam. 0.7 é um bom ponto de partida.
const MINIMUM_SCORE = 0.7; 

// --- SETUP DO PHPMailer ---
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Método inválido.");
}

// --- VERIFICAÇÃO DE SEGURANÇA ---

// 1. HONEYPOT: Verifica o campo que apenas robôs preencheriam.
// Você PRECISA adicionar um campo chamado 'website' no seu HTML (veja a Secção 3).
$honeypot = $_POST['website'] ?? '';
if (!empty($honeypot)) {
    // Retorna um erro genérico e silencioso para não dar dicas ao spammer.
    die("<p style='color:red; text-align:center;'>A verificação de segurança falhou (Honeypot).</p>");
}


// 2. RECAPTCHA V3: Coleta e valida o token.
$recaptcha_token = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha_token)) {
    die("<p style='color:red; text-align:center;'>Token reCAPTCHA em falta. Tente novamente.</p>");
}

// Envia a chave secreta e o token para a API do Google
$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . RECAPTCHA_SECRET_KEY . "&response=" . $recaptcha_token;
$response = file_get_contents($url);
$responseKeys = json_decode($response, true);

// Verifica o resultado do reCAPTCHA: sucesso, pontuação e ação.
$is_successful = $responseKeys['success'] ?? false;
$score = $responseKeys['score'] ?? 0.0;
$action = $responseKeys['action'] ?? '';

if (!$is_successful || $score < MINIMUM_SCORE || $action !== RECAPTCHA_ACTION) {
    // Podemos incluir o score na mensagem de erro se estivermos em debug, mas para produção, é melhor ser genérico.
    die("<p style='color:red; text-align:center;'>Verificação de segurança falhou. Pontuação: " . number_format($score, 2) . ". Tente novamente.</p>");
}

// --- PROCESSAMENTO DO FORMULÁRIO (Somente se as verificações passarem) ---

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
    $mail->Password = 'urbrdjzqofdptvvg'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('infante.fitness@gmail.com', 'Site Infante Fitness');
    $mail->addAddress('infante.fitness@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Mensagem de contacto do site';
    $mail->Body = "
        <h3>Mensagem de Contacto (Score reCAPTCHA: " . number_format($score, 2) . ")</h3>
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
?>
