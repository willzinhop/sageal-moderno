<?php 
    $sql = "CREATE TABLE dados (
  id_dados INT(10)  AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR (50),
  nome VARCHAR (300),
  nascimento VARCHAR (10),
  matricula VARCHAR (100),
  serie VARCHAR (30),
  statusdamatricula VARCHAR (300),
  turno VARCHAR (30), 
  rg VARCHAR (30),
  id_resp INT (10)
  

)";

require_once("../connect.php");
$resultado = mysqli_query($sageal, $sql);

if ($resultado) {
  echo 'A tabela foi criada com sucesso!';
} else {
  echo 'Ocorreu um erro ao criar a tabela: ' . mysqli_error($sageal);
}
?>