<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="../../public/style/evnts.css">
</head>

<body>
  <div class="logo">
    <a href="login.php"><img src="../../public/imagens/1678492714157.png" width="230px" title="Página Inicial" alt=""></a>
  </div>

  <div class="perfil">
    <img src="../../public/imagens/perfil-logo.png" width="50px" alt="">
  </div>
  <select name="will" id="will">
    <option value="a">Willames Paulino da Silva</option>
    <option value="Trocar de Senha">&#x1F512 Trocar de Senha</option> 
            <option value="Ajuda">&#x1F481 Ajuda com o site</option>
            <option value="Sair">&#x274C Sair do Sageal</option>
  </select>
  <!--
     <div class="evento1 transitionSize">
      <a href="#">Feira Literária</a>
      <P class="feira">Data: 19/05 <br> Requisitos: <br> Biografia do autor; <br> Encenação do livro; <br> Apresentações.</P>
     </div>
     <div class="evento2 text transitionSize">
      <a href="#">Consciência Negra</a>
      <P class="feira">Data: 20/10 <br> Requisitos: <br> Biografia de uma pessoa negra; <br> Encenação sobre racismo; <br> Apresentações.</P>

     </div>
     <div class="evento3 text transitionSize">
      <a href="#">Jogos Internos</a>
      <P class="feira">Data:10/11 a 17/11 <br> Requisitos: <br> Grito de guerra; <br> Mascote; <br> Grupos dos jogos. <br> Desfile.</P>

     </div>
     <div class="evento4 text transitionSize">
      <a href="#">Quadrilha</a>
      <P class="feira">Data:20/06 <br> Requisitos: <br> Dança junina <br> Comidas típicas <br> Música junina; <br> Desfile.</P>

     </div>-->
     <!--<div class="blocos">
      <img class="imag1" src="imagens/feira.png" alt="Feira literária" width="250">
      <img src="imagens/cons (1).png" alt="Consciência negra" width="250">
      <img src="imagens/junina.png" alt="Gincana Junina" width="250">
      <img src="imagens/jogoss.png" alt="Jogos Internos" width="250">
     </div>-->

    <div class="img1 transitionSize">
      <a href="#"><img src="../../public/imagens/feira.png" title="Feira Literária" width="230px" alt="feiraliteraria"></a>
    </div>
    <div class="img2 transitionSize">
      <a href="#"><img src="../../public/imagens/jogoss.png" title="Jogos Internos" width="230px" alt="jogosinternos"></a>
    </div>
    <div class="img3 transitionSize">
      <a href="#"><img src="../../public/imagens/junina.png" title="Gincana Junina" width="230px" alt="Quadrilha"></a>
    </div>
    <div class="img4 transitionSize">
      <a href="#"><img src="../../public/imagens/cons (1).png" title="Consciência Negra" width="230px" alt=""></a>
    </div>

     <div class="sair ">
      <a href="inicio.php">Voltar a página inicial</a>
     </div>
     <?php 
        session_start();
        if(!isset($_SESSION['logado'])) {
            header("Location: login.php");
        }
        ?>
</body>
</html>