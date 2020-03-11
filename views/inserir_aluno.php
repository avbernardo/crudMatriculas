<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome aluno:</label><br>
	<input class="form-control" type="text" name="nome" autocomplete="off" placeholder="Insira o nome do aluno">
	<br><br>
	<label class="badge badge-secondary">Data de nascimento:</label><br>
	<input class="form-control" type="date" name="data_nascimento" autocomplete="off" maxlength="10"  placeholder="Insira a data de nascimento"><br><br>
	<input type="submit" class="btn btn-success" value="Inserir aluno">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['idAluno'] == $_GET['editar']){ ?>
			<h1>Editar aluno</h1>
				<form method="post" action="edita_aluno.php">
					<input type="hidden" name="idAluno" value="<?php echo $linha['idAluno']; ?>">
					<br>
					<label class="badge badge-secondary">Nome aluno:</label><br>
					<input class="form-control" type="text" name="nome" placeholder="Insira o nome do aluno" autocomplete="off" value="<?php echo $linha['nome']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="date" name="data_nascimento" autocomplete="off" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar aluno">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>