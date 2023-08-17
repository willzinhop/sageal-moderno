<?php 
$para = "edgarcopque19@gmail.com";
$assunto = "Teste simples de envio de email via PHP";
$corpo = "Olá, este é um email de teste enviado por php";
$headers = "from:sagealmoderno@gmail.com";

if (mail($para, $assunto, $corpo, $headers)){
    echo("Email enviado para $para com sucesso!");
}
else{
    echo("Falha no envio do email!") ;
}
?>