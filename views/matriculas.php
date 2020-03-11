<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<br><br><br><br><br>
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['aluno_nome'].'</td>';
				echo '<td>'.$linha['curso_nome'].'</td>';
		?>
			<td><a href="deleta_matricula.php?idAlunoCurso=<?php echo $linha['idAlunoCurso']; ?>">Deletar</a></td></tr>
		<?php		
			}

		?>
	</tbody>
</table>