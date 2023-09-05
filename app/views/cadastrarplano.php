<?php 
require_once("../../database/connect.php");
session_start();
$id = $_SESSION['logado'];
$data = mysqli_escape_string($sageal, $_POST['data']);
$materia = mysqli_escape_string($sageal, $_POST['materia']);
$hora = mysqli_escape_string($sageal, $_POST['hora']);
$sql = "INSERT INTO  planoestudos (data,materia, hora, id_aluno) VALUES ('$data', '$materia', '$hora', $id) ";
if(mysqli_query($sageal, $sql)){
    header("Location: plano-estudos.php");
}
  

?>