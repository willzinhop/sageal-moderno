<?php 
require_once("../../database/connect.php");
session_start();
$id = $_SESSION['logado'];
$data = mysqli_escape_string($sageal, $_POST['data']);
$materia = mysqli_escape_string($sageal, $_POST['materia']);
$hora = mysqli_escape_string($sageal, $_POST['hora']);
$sql = "DELETE FROM  planoestudos WHERE id_aluno = $id ";
if(mysqli_query($sageal, $sql)){
    header("Location: plano-estudos.php");
}
  

?>