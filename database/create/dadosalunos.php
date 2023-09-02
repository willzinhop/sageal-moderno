<?php 
    $sql = "CREATE TABLE tabeladedado (
  id_usuario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR (50),
  token VARCHAR (244),
  nome VARCHAR (300),
  nascimento VARCHAR (8),
  matricula VARCHAR (100),
  serie VARCHAR (30),
  statusdamatricula VARCHAR (300),
  turno VARCHAR (30),
  rg VARCHAR (30),
  id_aluno INT (10)
)";

require_once("../connect.php");
$resultado = mysqli_query($sageal, $sql);

if ($resultado) {
  echo 'A tabela foi criada com sucesso!';
} else {
  echo 'Ocorreu um erro ao criar a tabela: ' . mysqli_error($sageal);
}
?>