<?php require 'cabecalho.php' ?>
	<h1>Edição de Aluno</h1>
	
	<form action="edita-aluno.php" method="POST">
		<input type="hidden" name="id" value="<?=$aluno['Id']?>" >
		<div>
			<label>Matrícula:</label>
			<input type="text" name="matricula" value="<?=$aluno['Matricula']?>" size="15" >
		</div>
		
		<div>
			<label>Nome:</label>
			<input type="text" name="nome" value="<?=$aluno['Nome']?>" size="30" >
		</div>
		
		<input type="submit" value="Salvar" />
		<a href="lista-aluno.php" >Desistir</a>
		
	</form>
	
<?php require 'rodape.php' ?>