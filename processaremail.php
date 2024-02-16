<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];

    // Endereço de e-mail da empresa
    $to = "juliasouzarr@gmail.com";
    // Assunto do e-mail
    $subject = "Novo contato via formulário de contabilidade";
    // Corpo do e-mail
    $message = "Nome: " . $nome . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Número de Whatsapp: " . $whatsapp;

    // Cabeçalhos adicionais
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Obrigado! Seu e-mail foi enviado com sucesso.";
    } else {
        echo "Desculpe, houve um problema no envio do e-mail. Por favor, tente novamente mais tarde.";
    }
}
?>
