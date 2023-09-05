<?php
require_once("../connect.php");

$sql = "CREATE TABLE planoestudos (
    id_plano INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    data VARCHAR (30),
    materia VARCHAR (30),
    hora VARCHAR (30),
    id_aluno INT(10) UNSIGNED,
    FOREIGN KEY (id_aluno) REFERENCES aluno (id_usuario)

    
)";

if(mysqli_query($sageal, $sql)) {
    echo("Funcionou");
}
else{
    echo("Não está rodando");
}
?>
