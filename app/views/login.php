<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lllogin.css">
    <title>Sageal</title>
</head>
<body>
  <div class="logo">
    <a href="#"><img src="./imagens/1678492714157.png" width="230px" alt="símbolo sageal"></a>
   </div>
    <form  action="./functions/validar.php" method="post">
      

             <!--colocar logo do sageal img-->
            <br>
            <ul><li>Login: CPF do Aluno/Responsável.</li>
              <br>
            <li>Senha: Senha da Pré-Matricúla.</li> <!--colocar emoji de seta-->
            </ul>
            
              <div class="input-single">
                
                <input type="text" placeholder="Login" name="cpf" class="input" autocomplete="off" maxlength="14">
                
                
              </div>

              <div class="senha-de-acesso">
                <input type="password" placeholder="Senha" name="senha" class="input" >
                
              </div>
              <div class="usuario">
                <select name="Willames" id="Willames">
                    <option value="Selecione a opção">Selecione a opção </option>
                    <option value="Direção">Direção</option> 
                    <option value="Estudante">Estudante</option>
                    <option value="Seduc">Seduc</option>
                </select>
            </div>
              <input type="submit" id="btn" name = "enviar" >
              <div class="mostrar">
              <input type="checkbox"name="password">Mostrar Senha
              </div>
              <div class="esqueceu-a-senha">
                <a href="redefinicao.php">Esqueceu a Senha</a>
              </div>
        
    </form>
  

   
</body>
<script src="./functions/mascara.js"></script>
</html>
