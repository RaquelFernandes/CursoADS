<?php
	require_once 'conexao.php';
	function inserir_aluno($conexao, $matricula, $nome)
	{
		$sql = "INSERT INTO alunos(Matricula, Nome)	VALUES ({$matricula}, '{$nome}')";
		return mysqli_query($conexao, $sql);
	}

	function excluir_aluno($conexao, $id)
	{
		$sql = "DELETE FROM alunos WHERE Id={$id}";
		return mysqli_query($conexao, $sql);
	}

	function listar_alunos($conexao)
	{
		$alunos = array();
		$sql = "SELECT * FROM alunos";
		$resultado = mysqli_query($conexao, $sql);
		while($aluno = mysqli_fetch_assoc($resultado))
		{
			array_push($alunos, $aluno);
		}
		return $alunos;
	}

	function consultar_aluno($conexao, $id)
	{
		$sql = "SELECT * FROM alunos WHERE Id = {$id}";
		$resultado = mysqli_query($conexao, $sql);
		return mysqli_fetch_assoc($resultado);
	}

 	function alterar_aluno($conexao, $id, $matricula, $nome)
	{
		$sql = "UPDATE alunos SET Matricula = {$matricula}, Nome = '{$nome}' WHERE Id = {$id}";
		return mysqli_query($conexao, $sql);
	}
	
