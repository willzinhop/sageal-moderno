<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style/redefinir.css">

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

    <div class="input-redefinir">
        <div class ="h1">
        <h1>Redefinição De Senha</h1> <br>
        </div>
        <input type="password" placeholder="Senha" name="senha" id="password" required> <br>
        <input type="password" placeholder="Confirme Senha" name="confirme" id="confirm_password" required>
        <button type="submit" name="att" class="butaoo">Confirmar</button>

    </div>
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