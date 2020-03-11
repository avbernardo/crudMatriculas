<?php 

include 'db.php';

$idProfessor = $_GET['idProfessor'];

$query = "DELETE FROM PROFESSOR WHERE idProfessor = '$idProfessor'";

mysqli_query($conexao, $query) or die (mysqli_error($conexao));

header('location:index.php?pagina=professores');
