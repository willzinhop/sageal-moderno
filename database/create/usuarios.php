<?php
require_once("../connect.php");

$sql = "CREATE TABLE aluno (
    id_usuario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR (11),
    senha VARCHAR (30)

    
)";

if(mysqli_query($sageal, $sql)) {
    echo("Funcionou");
}
else{
    echo("Não está rodando");
}
?>
