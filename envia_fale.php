<?
# alterar a variavel abaixo colocando o seu email

$destinatario = "rafael.portorodrigues@vacos.de";

$nome = $_REQUEST['fname'];
$sobrenome = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['message'];
$assunto = $_REQUEST['subject'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - EMAIL RECEBIDO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome " "$sobrenome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Assunto: " . $assunto . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");


?>