<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<br><br><br><br><br>
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
			?>
 
			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['idAluno']; ?>">Editar</a></td>
			<td><a href="deleta_aluno.php?idAluno=<?php echo $linha['idAluno']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>