<?php 

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$idProfessor = $_POST['escolha_professor'];

$query = "INSERT INTO CURSO(nome, idProfessor) VALUES('$nome_curso', '$idProfessor')";

mysqli_query($conexao, $query) or die (mysqli_error($conexao));

header('location:index.php?pagina=cursos');
 	