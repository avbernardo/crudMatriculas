<a class="btn btn-success" href="?pagina=inserir_professor">Inserir novo professor</a>
<br><br><br><br><br>
<table class="table table-hover table-striped" id="professores">
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
			while($linha = mysqli_fetch_array($consulta_professores)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
			?>
 
			<td><a href="?pagina=inserir_professor&editar=<?php echo $linha['idProfessor']; ?>">Editar</a></td>
			<td><a href="deleta_professor.php?idProfessor=<?php echo $linha['idProfessor']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>