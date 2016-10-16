<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastrar Aluno</title>
  </head>
  <body>
    <h2 class="text-info">Cadastrar Aluno</h2>
    @if ($errors->any())
      <ul class="alert alert-warning">
        @foreach ($errors->all() as $value)
          <li>{{ $value }}</li>
        @endforeach
      </ul>
    @endif

    <form action="/aluno/salvar" method="post" class="content">
      {!! csrf_field() !!}
      <div class="form-group">
        <label class="col-md-2 text-right">Matrícula</label>
        <div class="col-md-4" >
          <input type="text" name="matricula" size="15"
            value="{{$aluno->matricula}}" />
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 text-right">Nome</label>
        <div class="col-md-4" >
          <input type="text" name="nome" size="40"
            value="{{$aluno->nome}}" />
        </div>
      </div>
      <div>
        <a href="/aluno/listar" class="btn btn-default ">Voltar</a>
        <input type="submit" class="btn btn-success" value="Salvar" />
      </div>
    </form>
  </body>
</html>
