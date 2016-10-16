<?php require 'cabecalho.php' ?>
	
	<?php if(isset($_GET['sucesso'])) { ?>
		<p><?=$_GET['sucesso']?></p>
	<?php } ?>
	
	<?php if(isset($_GET['falha'])) { ?>
		<p><?=$_GET['falha']?></p>
	<?php } ?>

	<h1> Listagem de Alunos  </h1>
	
	<a href="adiciona-aluno.php">Adicionar</a>
	<br /><br />
	
	<table border="1">
	  <tr>
		  <th>Matricula</th>
		  <th>Nome</th>
		  <th>Ações</th>
	  </tr>
		<?php foreach ($alunos as $aluno) { ?>
			<tr>
				<td><?=$aluno['Matricula']?></td>
				<td><?=$aluno['Nome']?></td>
				<td><a href="edita-aluno.php?id=<?=$aluno['Id']?>">Editar</td>
				<td><a href="remove-aluno.php?id=<?=$aluno['Id']?>" onclick="confirm('Deseja remover o aluno?');">Remover</a></td>
			</tr>
	  <?php } ?>
	</table>

<?php require 'rodape.php' ?>
