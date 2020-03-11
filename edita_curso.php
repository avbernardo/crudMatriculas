<?php 

include 'db.php';

$idCurso = $_POST['idCurso'];
$nome = $_POST['nome_curso'];
$idProfessor = $_POST['escolha_professor'];


$query = "UPDATE CURSO SET nome='$nome', idProfessor='$idProfessor' WHERE idCurso = '$idCurso'";

mysqli_query($conexao, $query) or die(mysqli_error($conexao));

header('location:index.php?pagina=cursos');
