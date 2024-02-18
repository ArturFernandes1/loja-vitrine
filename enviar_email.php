

<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];
    $bairro = $_POST["bairro"];
    $data = $_POST["data"];
    $mensagem = $_POST["mensagem"];
    
    // Email de destino da empresa
    $destino = "arturdantas121@gmail.com"; // Substitua pelo endereço de email da empresa
    
    // Assunto do email
    $assunto = "Solicitação de Orçamento - $nome $sobrenome";
    
    // Conteúdo do email
    $mensagem_email = "Nome: $nome $sobrenome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Bairro do Imóvel: $bairro\n";
    $mensagem_email .= "Data do Projeto: $data\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";
    
    // Enviar o email
    mail($destino, $assunto, $mensagem_email);
    
    // Redirecionar de volta para a página de contato
    header("Location: /app/views/contato/contato.html"); // Substitua pelo caminho correto da página de contato
    exit();
} else {
    // Se o formulário não foi enviado, redirecione de volta para a página de contato
    header("Location: /app/views/contato/contato.html"); // Substitua pelo caminho correto da página de contato
    exit();
}
?>
