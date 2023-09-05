<?php
require_once("../connect.php");

$sql = "CREATE TABLE horario (
    idhorario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    hora VARCHAR (5),
    dia VARCHAR (30),
    professor VARCHAR (50),
    serie VARCHAR (10),
    aula VARCHAR(100),
    id_aluno int (10) UNSIGNED,
    FOREIGN KEY (id_aluno) references aluno(id_usuario)

    
)";

if(mysqli_query($sageal, $sql)) {
    echo("Funcionou");
}
else{
    echo("Não está rodando");
}
?>
