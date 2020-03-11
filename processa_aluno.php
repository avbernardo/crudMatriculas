<?php 

include 'db.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNO(nome, data_nascimento) VALUES ('$nome', '$data_nascimento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
