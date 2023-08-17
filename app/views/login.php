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
    <form action = "" method = "POST">

             <!--colocar logo do sageal img-->
            <br>
            <ul><li>Login: CPF do Aluno/Responsável.</li>
              <br>
            <li>Senha: Senha da Pré-Matricúla.</li> <!--colocar emoji de seta-->
            </ul>
            
              <div class="input-single">
                <input type="text" placeholder="Login" id="login" class="input" name = "cpf">
                
                
              </div>

              <div class="senha-de-acesso">
                <input type="password" placeholder="Senha" id="senha" class="input" name = "senha" >
                
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
              <input type="checkbox" onclick="mostrarOcultarsenha()">Mostrar Senha
              </div>
              <div class="pre-matricula">
                <a href="#">Pré-matrícula</a>
              </div>
        
    </form>
  

   
</body>
<script>

  function mostrarOcultarsenha(){

  var senha=document.getElementById("senha");
  if(senha.type=="password"){
    senha.type="text";
  }else{
    senha.type="password";
  }

  }


</script>
</html>

<?php 
require_once("../../database/connect.php");
  if(isset($_POST['enviar'])){
    $cpf = mysqli_escape_string($sageal, $_POST['cpf']);
    $senha = mysqli_escape_string($sageal, $_POST['senha']);
    
  
    $sql ="SELECT * FROM aluno WHERE cpf = '$cpf' and senha = '$senha' ";
    $consulta = mysqli_query($sageal, $sql);
    $dados = mysqli_fetch_array($consulta);
    if(mysqli_num_rows($consulta) == 1) {
      
      session_start();
      $_SESSION['logado'] = $dados['id_usuario'];
      header("Location: inicio.html");
      
    }
    else {
      echo("Usuário inexistente!!!");
    }
  
  }
  
?>
