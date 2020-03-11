<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT CURSO.idCurso, CURSO.nome as curso_nome, CURSO.idProfessor as idProfessor, PROFESSOR.idProfessor, PROFESSOR.nome as professor_nome
FROM CURSO,PROFESSOR 
where CURSO.idProfessor = PROFESSOR.idProfessor";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNO";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos_cursos.idAlunoCurso, aluno.nome as aluno_nome, curso.nome as curso_nome
			FROM aluno, curso, alunos_cursos
			WHERE alunos_cursos.idAluno = aluno.idAluno
			AND alunos_cursos.idCurso = curso.idCurso";
			
$consulta_matriculas = mysqli_query($conexao, $query);

$query = "SELECT * FROM PROFESSOR";
$consulta_professores = mysqli_query($conexao, $query);