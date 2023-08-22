<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefina a sua senha</title>
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

<form action = "" method = "POST">

        <legend>Confirmação de Senha </legend>

        <input type="password" placeholder="Senha" name="senha" id="password" required>
        <input type="password" placeholder="Confirme Senha" name="confirme" id="confirm_password" required>

        <button type="submit" name="att" class="btn">Confirmar</button>
    
</form>

<script>
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Arruma a senha leigo!");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

<?php 
    $token = $_GET['token'];
    if(isset($_POST['att'])){
        $novasenha = $_POST['confirme'];
        $sql = "UPDATE aluno SET senha = '$novasenha', token = '' WHERE token = $token";
        if(mysqli_query($sageal, $sql)) {
            header("Location:login.php");
        }
    }
?>

</body>
</html>