<!DOCTYPE html>
<html lang="png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sageal</title>
    <link rel="stylesheet" href="horarioescola (1).css">
</head>
    <div class="usuario">
        <select name="Willames" id="estudante">
            <option value="Willames Paulino"> Willames Paulino da Silva</option>
            <option value="Trocar de Senha">&#x1F512 Trocar de Senha</option> 
            <option value="Ajuda">&#x1F481 Ajuda com o site</option>
            <option value="Sair">&#x2716 Sair do Sageal</option>
        </select>
    </div>

<body>
    <div class="logo">
        <img src="./imagens/1678492714157.png" width="230px" alt="">
    </div>



    <div class="manha">
        <a href="#"><img src="./imagens/manha.png" title="Horário da manhã" width="230px" alt=""></a>
    </div>

    <div class="tarde">
        <a href="#"><img src="./imagens/tarde.png" title="Horário da tarde" width="230px" alt=""></a>
    </div>

    <div class="noite">
        <a href="#"><img src="./imagens/noite.png" title="Horário da noite" width="230px" alt=""></a>
    </div>
    <?php 
        session_start();
        if(!isset($_SESSION['logado'])) {
            header("Location: login.php");
        }
        ?>
</body>
</html>