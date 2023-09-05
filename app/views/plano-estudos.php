<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Estudos - Sageal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php 
    require_once("../../database/connect.php");
    ?>
<table class="table  table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Plano</th>
      <th scope="col">Dia</th>
      <th scope="col">Materia</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
  session_start();
  if(!isset($_SESSION['logado'])) {
    header("Location: login.php");
}
  
  $id = $_SESSION['logado'];
  $sql = "SELECT * FROM planoestudos where id_aluno = '$id' ORDER BY data ";
  $consulta = mysqli_query($sageal, $sql);
  while($dados = mysqli_fetch_array($consulta)){
  
  ?>
    <tr>
        
      <th scope="row"><?php echo($dados['id_plano']);?></th>
      <td><?php
      $data = date('d-m-Y', strtotime($dados['data']));
      echo($data);?></td>
      <td><?php echo($dados['materia']);?></td>
      <td><?php echo($dados['hora']);?></td>
    <?php 
  }
    ?>
  </tbody>
</table>
<div id="criarPlano">
<h3>Cria Plano de Estudos</h3>
<button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>
<!-- Button trigger modal -->
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar plano de estudos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrarplano.php" method="post">

        <label for="data">Data</label>
        <input name="data" required class="form-control form-control-lg" type="date" placeholder=".form-control-lg">
        <label for="data">Materia</label>
        <input name="materia" required class="form-control" type="text" placeholder="Default input">
        <label  for="data">Hora</label>
        <input name="hora" required class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
        <div class="modal-footer">
          <button type="button" name="criarPlano" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Criar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
    <div class="limpar">
        <a href="resetarplano.php" title="Limpar dados.">Limpar Plano</a>
    </div>
    
        
        <div class="sair">
        <a href="inicio.php" title="Página Inicial.">Página inicial</a>
        </div>
       
</body>

</html>