<?php 

include 'db.php';

$idAluno = $_GET['idAluno'];

$query = "DELETE FROM ALUNO WHERE idAluno = '$idAluno'";

mysqli_query($conexao, $query) or die(mysqli_error($conexao));

header('location:index.php?pagina=alunos');
