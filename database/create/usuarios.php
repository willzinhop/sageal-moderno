<?php

$sql = "CREATE TABLE alunos (
    id_usuario INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(11),
    senha VARCHAR(30),
    email VARCHAR(50),
    token VARCHAR(244),
    id_dados INT(10) UNSIGNED NOT NULL,
    FOREIGN KEY (id_dados) REFERENCES alunos (id_usuario)    
)"; 


require_once("../connect.php");
$resultado = mysqli_query($sageal, $sql);

if ($resultado) {
    echo("Funcionou");
}
else{
    echo 'Não está rodando: ' . mysqli_error;
}
?>
