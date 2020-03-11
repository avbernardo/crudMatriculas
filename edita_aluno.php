<?php 

include 'db.php';

$idAluno = $_POST['idAluno'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];


$query = "UPDATE ALUNO SET nome='$nome', data_nascimento='$data_nascimento' WHERE idAluno = '$idAluno'";

#print($query);
mysqli_query($conexao, $query) or die(mysqli_error($conexao));

header('location:index.php?pagina=alunos');
