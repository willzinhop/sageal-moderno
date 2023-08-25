<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Estudos - Sageal</title>
    <link rel="stylesheet" href="../../public/style/plano-estudos.css">
</head>
     <div class="logo">
        <img src="../../public/imagens/1678492714157.png" width="230px" alt="">
     </div>
    <div class="usuario">
        <select name="Willames" id="estudante">
            <option value="Willames Paulino">Willames Paulino da Silva</option>
            <option value="Trocar de Senha">&#x1F512 Trocar de Senha</option> 
            <option value="Ajuda">&#x1F481 Ajuda com o site</option>
            <option value="Sair">&#x274C Sair do Sageal</option>
        </select>
    </div>
    <h1>Plano de Estudos</h1>
    
<body>
    <h3>◉ 1ª Semana</h3>
    <h3 class="sem2">◉ 2ª Semana</h3>
    <h3 class="sem3">◉ 3ª Semana</h3>
    <h3 class="sem4">◉ 4ª Semana</h3>
    <h3 class="sem5">◉ 5ª Semana</h3>
    <div class="lista1">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>
    <div class="lista2">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>
    <div class="lista3">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>
    <div class="lista4">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>
    <div class="lista5">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        </div>
    <div class="limpar">
        <a href="#" title="Limpar dados.">Limpar Plano</a>
    </div>
    <div class="salvar">
        <a href="#" title="Salvar dados.">Salvar Dados</a>
    </div>
        
        <div class="sair">
        <a href="inicio.php" title="Página Inicial.">Página inicial</a>
        </div>
        
        <?php 
        session_start();
        if(!isset($_SESSION['logado'])) {
            header("Location: login.php");
        }
        ?>
</body>
</html>