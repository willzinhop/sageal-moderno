<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   
</body>
</html>
    <link rel="stylesheet" href="../../public/style/lllogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            
                <div class = "vtnc">         
                <input type="submit" id="btn" name = "enviar" >
                </div>
              
                <div class="esqueceu-a-senha" class = "Es">
  
                  <a href="redefinicao.php">Esqueceu a Senha</a>
  
                </div>
              
    


   
</body>

</form> 


</html>

