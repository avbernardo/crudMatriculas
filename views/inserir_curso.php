<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php">
	<br>
	<label class="badge badge-secondary">Nome curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" autocomplete="off" placeholder="Insira o nome do curso">
	<br><br>
	<p class="badge badge-secondary">Selecione o professor</p>
	<select class="form-control" name="escolha_professor">
		<option>Selecione um professor</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_professores)){
			echo '<option value="'.$linha['idProfessor'].'">'.$linha['nome'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir curso">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['idCurso'] == $_GET['editar']){ ?>

			<h1>Editar curso</h1>
			<form method="post" action="edita_curso.php">
				<input type="hidden" name="idCurso" value="<?php echo $linha['idCurso']; ?>">
				<br>
				<label class="badge badge-secondary">Nome curso:</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" autocomplete="off" value="<?php echo $linha['curso_nome']; ?>">
				<br><br>

	<p class="badge badge-secondary">Selecione o professor</p>
	<select class="form-control" name="escolha_professor">
		<option>Selecione um professor</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_professores)){
			echo '<option value="'.$linha['idProfessor'].'">'.$linha['nome'].'</option>';
		}
		?>
	</select>
				<input class="btn btn-success" type="submit" value="Editar curso">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
