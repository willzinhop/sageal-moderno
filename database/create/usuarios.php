<?php
require_once("../connect.php");

$sql = "CREATE TABLE aluno (
    id_usuario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR (11),
    senha VARCHAR (30),
    email VARCHAR (50),
    token VARCHAR (244),
    id_dados INT(10),
    Foreign key (id_dados) references dados(id_dados)

    
)";

if(mysqli_query($sageal, $sql)) {
    echo("Funcionou");
}
else{
    echo("Não está rodando");
}
?>
