<?php 

include 'db.php';

$idAluno = $_POST['escolha_aluno'];
$idCurso = $_POST['escolha_curso'];

$query = "INSERT INTO ALUNOS_CURSOS(idAluno, idCurso) VALUES('$idAluno', '$idCurso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
