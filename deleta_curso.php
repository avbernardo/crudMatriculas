<?php 

include 'db.php';

$idCurso = $_GET['idCurso'];

$query = "DELETE FROM CURSO WHERE idCurso = '$idCurso'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
