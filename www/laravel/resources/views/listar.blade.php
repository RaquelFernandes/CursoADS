<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Alunos</title>
  </head>
  <body>
    <h2 class="text-danger" >Lista de Alunos</h2>
    {!! $aluno->links() !!}
    <p>
      <a href="/aluno/inserir" class="btn btn-sm btn-success" >Inserir &nbsp; <span class="glyphicon glyphicon-plus"></a>
    </p>
    <table class="table table-hover table-bordered">
      <tr class="info">
        <th>Matricula</th>
        <th>Nome</th>
        <th>Alterar</th>
        <th>Excluir</th>
      </tr>
      <?php foreach ($aluno as $alu) : ?>
        <tr>
          <td> {{$alu->matricula}} </td>
          <td> {{$alu->nome}} </td>
          <td>
            <a href="/aluno/alterar/{{$alu->id}}"> <span class="glyphicon glyphicon-pencil"></span></a>
          </td>
          <td>
            <a href="/aluno/excluir/{{$alu->id}}"> <span class="glyphicon glyphicon-trash"></a>
          </td>
      </tr>
      </<?php endforeach; ?>
    </table>
  </body>
</html>
