<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Estudante</title>
    <link rel="stylesheet" href="../../public/style/areaestudante.css">
</head>
<?php 


?>
<body>
    <h2>Dados do aluno:</h2>
    <div class="aluno">
        <img src="./imagens/oi-removebg-preview.png" height="500px" width="550px" alt="">
    </div>

    <?php 
        require_once("../../database/connect.php");

        $sql = "SELECT * FROM dados where id_dados = 1";
        $consulta = mysqli_query($sageal , $sql);



        $dados = mysqli_fetch_array($consulta);
    ?>
    <form>
       
        <table class="tabela1">
            <tr>
                <th>Nome:</th>
            </tr>
            <tr>
            <td><?php echo("$dados[nome]");?></td>
            </tr>
        </table>

        <table class="tabela2">
            <tr>
                <th>Data de nascimento:</th>
            </tr>
            <tr>
                <td><?php echo("$dados[nascimento]");?></td>
            </tr>
        </table>

        <table class="tabela3">
            <tr>
                <th>Matrícula:</th>
            </tr>
            <tr>
                <td><?php echo("$dados[matricula]");?></td>
                
            </tr>
        </table>

        <table class="tabela4">
            <tr>
                <th>Ano/Série/Módulo/Etapa:</th>
            </tr>
            <tr>
                <td><?php echo("$dados[serie]");?></td>
            </tr>
        </table>

        <table class="tabela5">
            <tr>
                <th>Status da Matrícula:</th>
            </tr>
            <tr>
                <td><?php echo("$dados[statusdamatricula]");?></td>
            </tr>
        </table>

        <table class="tabela6">
            <tr>
                <th>Turno:</th>
            </tr>
            <tr>
                <td><?php echo("$dados[turno]");?></td>
            </tr>
        </table>

        <table class="tabela7">
            <tr>
                <th>Turma:</th>
            </tr>
            <tr>
                <td>3ª M03-ER</td>
            </tr>
        </table>

        <table class="tabela8">
            <tr>
                <th>CPF: </th>
            </tr>
            <tr>
                <!-- colocar o cpf -->
                <td></td> 
            </tr>
        </table>

        <table class="tabela9">
            <tr>
                <th>Checkup de documentos</th>
            </tr>
            <tr>
                <td class="td1">RG - &#x2705</td>
                <td class="td2">CPF - &#x2705</td>
                <td class="td3">Foto 3x4 - &#x2705</td>
                <td class="td4">Histórico Escolar - &#x2705</td>
            </tr>
        </table>
    </form>
    <div class="sair transitionSize">
        <a href="inicio.html">Voltar a página Inicial</a>
    </div>
    <?php 
        // session_start();
        // if(!isset($_SESSION['logado'])) {
        //     header("Location: login.php");
        // }
        ?>
</body>
</html>