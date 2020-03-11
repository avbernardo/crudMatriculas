<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo professor</h1>
<form method="post" action="processa_professor.php">
	<br>
	<label class="badge badge-secondary">Nome:</label><br>
	<input class="form-control" type="text" name="nome" autocomplete="off" placeholder="Insira o nome do professor">
	<br><br>
	<label class="badge badge-secondary">Data de nascimento:</label><br>
	<input class="form-control" type="date" name="data_nascimento" autocomplete="off" placeholder="Insira a data de nascimento"><br><br>
	<input type="submit" class="btn btn-success" value="Inserir professor">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_professores)){ ?>
		<?php if($linha['idProfessor'] == $_GET['editar']){ ?>
			<h1>Editar professor</h1>
				<form method="post" action="edita_professor.php">
					<input type="hidden" name="idProfessor" value="<?php echo $linha['idProfessor']; ?>">
					<br>
					<label class="badge badge-secondary">Nome aluno:</label><br>
					<input class="form-control" type="text" name="nome" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar professor">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>