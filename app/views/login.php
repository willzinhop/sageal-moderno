<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/style/lllogin.css">
   
    <title>Sageal</title>

</head>
<body>
  <div class="logo">
    <a href=""><img src="../../public/imagens/1678492714157.png" width="230px" alt="símbolo sageal"></a>
    
   </div>
    <form action="" method="post">
     <?php 
     $erros = array();
     
     
     if(!empty($erros)){
      
      
       ?> 
    
        <?php 
          
          foreach($erros as $erro){
            echo("<li> $erro");
          }
        ?>  
    </div>
    <?php } ?>
     

     
    <?php 
    require_once("../../database/connect.php");
      if(isset($_POST['enviar'])){
        $cpf = mysqli_escape_string($sageal, $_POST['cpf']);
        require_once("../functions/validar.php");
        if(validarCPF($cpf)){
          
          $senha = mysqli_escape_string($sageal, $_POST['senha']);
          
        
          $sql ="SELECT * FROM aluno WHERE cpf = '$cpf' and senha = '$senha' ";
          $consulta = mysqli_query($sageal, $sql);
          $dados = mysqli_fetch_array($consulta);
          if(mysqli_num_rows($consulta) == 1) {
            
            session_start();
            $_SESSION['logado'] = $dados['id_usuario'];
            header("Location: inicio.php");
            
          }
          else{
            echo("<div class='alert alert-danger' role='alert'> <li>Login Inválido!</div>");
          }
        }
        else{
          echo("<div class='alert alert-danger' role='alert'> <li>Cpf inválido!</div>");
        }
        }
        
    ?>
         
        
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
              
              <div class="esqueci">
                  <a href="#demo-modal">Esqueceu a senha</a>
            </div>
    </form>
            
              
            




  <form action="" method="POST">
  <div id="demo-modal" class="modal">
  <div class="modal__content">
    <h1>Redefinição de senha</h1>
    <hr>
    <div class="campo">
    <p>
      Para a redefinição de senha, <br>adicione o email no campo abaixo.
    </p>
  <br>
   
        <div class="email">
    <label for="email">Digite seu e-mail: </label> <br>
    <input type="text" id="campo-email" placeholder="e-mail" name="email"></input> <br>
    </div>
    </div>
    
    <button type="button" onclick="location.href='login.php'" id="botao_fechar" name="fechar1">Fechar</button>
    <button type="submit" id="botao-enviar" name="enviar1">Enviar</button>
       

    </form>
    
    
    </div>
  </div>
</div>


<?php 
if (isset($_POST['enviar1'])){
    require_once("../../database/connect.php");
    $email = mysqli_escape_string($sageal, $_POST['email']);
    $sql = "SELECT * FROM aluno WHERE email = '$email'";
    $dados = mysqli_query($sageal, $sql);
    $array = mysqli_fetch_array($dados);
    if(mysqli_num_rows($dados)){
        require_once("../functions/enviaremail.php");
        $token = uniqid();
        $sql = "UPDATE aluno SET token = '$token' WHERE id_usuario = '$array[id_usuario]'";
        email($array["email"], $token);
        mysqli_query($sageal, $sql);
        

    }
}
?>
        
    </form>
  
    </form>
    </div>
  
             
    
   
</body>

 


</html>

