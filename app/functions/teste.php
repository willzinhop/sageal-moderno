<?php 

function email($email, $token){

    $link = '<a href="localhost/sageal-moderno/app/views/redefinir.php?token=\''.$token.'\'">clique aqui</a>';

    $para = $email;
    $assunto = "Teste simples de envio de email via PHP";
    $corpo = "$link";
   
    $headers = 'Content-Type: text/html';
    
    if (mail($para, $assunto, $corpo, $headers)){
        echo("Email enviado para $para com sucesso! ");
    }
    else{
        echo("Falha no envio do email!") ;
    }
}
?>
