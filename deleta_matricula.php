<?php 

include 'db.php';

$idAlunoCurso = $_GET['idAlunoCurso'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE idAlunoCurso = $idAlunoCurso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
