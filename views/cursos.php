<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<br><br><br><br><br>
<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr>
			<th>Nome curso</th>
			<th>Professor</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<tr><td >'.$linha['curso_nome'].'</td>';
				echo '<td>'.$linha['professor_nome'].'</td>';
		?>
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['idCurso']; ?>">Editar</a></td>
			<td><a href="deleta_curso.php?idCurso=<?php echo $linha['idCurso']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>