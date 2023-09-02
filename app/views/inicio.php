<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sageal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/style/inc.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Oswald:wght@500&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400&display=swap
">
</head>
<form>
    <!----
<header>
    
    <div class="container">
        <div class="navbar">
          
           
            <nav>
                <ul>
                    <!----
                    <li><a href="ajuda.html">Ajuda</a></li>
                    <li><a href="login.html">Sair</a></li>
                
                </ul>
               
            </nav>
               
           </div>
    </div>
   
    
</header> -->
</form>
<body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="login.php">Sair do Sageal</a></li>
  </ul>
</div>

 

      <div class="logo">
        <a href="login.php"><img src="../../public/imagens/1678492714157.png" width="230px" alt=""></a>
      </div>
        <!----
         <div class="perfil">
            <img src="./imagens/perfil-removebg-preview.png" width="300px" alt="">
         </div> -->
         <div class="dados">
            <a href="areaestudantil.php"><img src="../../public/imagens/AREA-DO-ESTUDANTE (1).jpg" alt=""></a>
         </div>
         <div class="plano ">
            <a href="plano-estudos.php"><img src="../../public/imagens/plano.png" alt=""></a>
         </div>

         <div class="boletim ">
            <a href="boletins.php"><img src="../../public/imagens/boletim.png" alt=""></a>
         </div>

         <DIV class="eventos ">
            <a href="eventos.php"><img src="../../public/imagens/eventos.png" alt=""></a>
         </DIV>

         <DIv class="cal ">
            <a href="calescolar.php"><img src="../../public/imagens/calendario.png" alt=""></a>
         </DIv>

         <div class="horario">
            <a href="horarioescolar.php"><img src="../../public/imagens/horario.png" alt=""></a>
         </div>

            

    </div>
    <div class="slides">
        
         <img src="../../public/imagens/escola10.png" width="300px" alt="Escola 10">
        
            <img src="../../public/imagens/marco.png" width="300px" alt="Março">
            <img src="../../public/imagens/escola10.png" width="300px" alt="Escola 10">
        
            <img src="../../public/imagens/marco.png" width="300px" alt="Março">
        
            
        </div>
        
        <?php 
        session_start();
        if(!isset($_SESSION['logado'])) {
            header("Location: login.php");
        }
        ?>
</body>

</html>