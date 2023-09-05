<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sageal</title>
    <link rel="stylesheet" href="../../public/style/horarioescola.css">
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
        <img src="../../public/imagens/1678492714157.png" width="230px" alt="">
    </div>


    

    <?php 
    session_start();
    if(!isset($_SESSION['logado'])) {
        header("Location: login.php");
    }
    
    
    $mysqli = mysqli_connect("localhost", "root", "", "sageal");
    
    $id = $_SESSION['logado'];
    $sql = "SELECT * FROM dados WHERE id_dados = '$id'"; 
    $result = mysqli_query($mysqli, $sql);
    $dados = mysqli_fetch_array($result);
    ?>
    
    
    <?php 
    
    if($dados['turno'] == "Manhã"){
        
    ?>
     <div class="manha">
        <a href="DIAS.php"><img src="../../public/imagens/manha.png" title="Horário da tarde" width="230px" alt=""></a>
    </div>    
    
    <?php }?>

    <?php 
     if($dados['turno'] == "tarde"){
    ?>
    <div class="tarde">
        <a href="DIAS.php"><img src="../../public/imagens/tarde.png" title="Horário da tarde" width="230px" alt=""></a>
    </div>
    <?php }?>


    <?php 
     if($dados['turno'] == "noite"){
    ?>
    <div class="noite">
        <a href="DIAS.php"><img src="../../public/imagens/noite.png" title="Horário da tarde" width="230px" alt=""></a>
    </div>
    <?php }?>

    

    

    
</body>
</html>