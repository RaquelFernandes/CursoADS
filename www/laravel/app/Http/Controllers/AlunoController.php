<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use App\Aluno as Aluno;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function listar()
    {
      //  if(Gate::denies('listar', new Aluno))
      //  {
      //    abort(403, 'Acesso Negado');
      //  }
       return view('listar', ['aluno'=> Aluno::paginate(5)]);
    }

    public function inserir()
    {
      return view('inserir', ['aluno' => new Aluno]);
    }

    public function alterar($id)
    {
      return view('alterar', ['aluno' => Aluno::find($id)]);
    }

    public function salvar(AlunoRequest $request)
    {

      // $this->validate($request, [
      //   'matricula' => 'required'
      // ]);

      $aluno = new Aluno();
         $id = $request->input('id');
          if ($id != 0) {
           $aluno = Aluno::find($request->id);
          }
           $aluno->matricula = $request->input('matricula');
           $aluno->nome = $request->input('nome');
           $aluno->save();

      return redirect("aluno/listar");
    }

    public function excluir($id)
    {
       $aluno = Aluno::find($id);
       $aluno->delete();
       return redirect('/aluno/listar');
    }
}
