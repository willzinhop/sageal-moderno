<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
</head>
<body>
    <form action="" method="POST">
 <label for="email">Digite seu e-mail: </label>
 <input type="text" placeholder="e-mail" name="email"></input>
 <button type="submit" name="enviar">Enviar</button>
</form>

<?php 
if (isset($_POST['enviar'])){
    require_once("../../database/connect.php");
    $email = mysqli_escape_string($sageal, $_POST['email']);
    $sql = "SELECT * FROM aluno WHERE email = '$email'";
    $dados = mysqli_query($sageal, $sql);
    $array = mysqli_fetch_array($dados);
    if(mysqli_num_rows($dados)){
        require_once("../functions/teste.php");
        $token = uniqid();
        $sql = "UPDATE aluno SET token = '$token' WHERE id_usuario = '$array[id_usuario]'";
        email($array["email"], $token);
        mysqli_query($sageal, $sql);
        

    }
}
?>
</body>

</html>