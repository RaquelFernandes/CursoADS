@extends('app')

@section('conteudo')
<label for="estado">Estados</label>
<select id="estado">
    @foreach ($estados as $estado) {
        <option value="{{$estado['id']}}">{{ $estado['estado'] }}</option>    
    }
    @endforeach
</select>

<label for="cidades">Cidades</label>
<select name="cidades">
    
</select>
@endsection
@section('js')
    <script type="text/javascript">
    $('#estado').change(function () {
        var idEstado = $(this).val();
        $.get('/cidades/'+idEstado, function(cidades) {
            $('select[name=cidade]').empty();
            $.each(cidades, function (key, value) {
                $('select[name=cidade]').append('<option '
                + 'value=' + value.id + '>' + value.cidade
                + '</option>');
            });
        });
    });
</script>
@endsection