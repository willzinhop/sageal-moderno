<?php
require_once("../connect.php");

$sql = "DROP TABLE aluno";
    


if(mysqli_query($sageal, $sql)) {
    echo("Funcionou");
}
else{
    echo("Não está rodando");
}
?>