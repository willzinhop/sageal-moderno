<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redifina a sua senha</title>
</head>
<body>
    <?php 
    require_once("../../database/connect.php");
    

    $token = $_GET['token'];
    
    $sql = "SELECT * FROM aluno WHERE token = $token";
    $dados = mysqli_query($sageal, $sql);
    $array = mysqli_fetch_array($dados);
    if(!mysqli_num_rows($dados)){
        header("Location: login.php");

    }

    
    ?>
<form action="" method="POST">
    <ul>
        <li>
 <label for="novasenha">Digite sua nova senha: </label>
 <input type="text" placeholder="nova senha" name="novasenha"></input> 
 </li>

 <li>

 <label for="confirmesenha">Confirme sua senha: </label>
 <input type="text" placeholder="confirme sua senha" name="confirmesenha"></input>

 <button type="submit" name="enviar">Enviar</button>
 </li>
</ul>
</form>

<?php 

?>

</body>
</html>