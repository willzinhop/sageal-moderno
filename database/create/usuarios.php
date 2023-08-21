<?php
require_once("..\delet\connect.php");


$sql = "CREATE TABLE dadosalunos (
    id_usuario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR (11),
    senha VARCHAR (30)
   
)";


$resultado = mysqli_query($sageal, $sql);

if ($resultado) {
  echo 'A tabela foi criada com sucesso!';
} else {
  echo 'Ocorreu um erro ao criar a tabela: ' . mysqli_error($sageal);
}
?>