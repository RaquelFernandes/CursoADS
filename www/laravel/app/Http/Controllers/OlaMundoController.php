<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class OlaMundoController extends Controller
{
      public function index($nome)
      {
          return view('ola')->with('nome', $nome);
      }

      public function view(Request $request)
      {
        $resposta = "Olá ";
        if ($request->has('nome')) {
            $resposta = $resposta . "{$request->input('nome')}";
        } else {
          return new Response('$resposta', 404);
        }
        if ($request->has('sexo')) {
          $resposta = $resposta . "{$request->input('sexo')}";
        }
        if ($request->has('idade')) {
          $resposta = $resposta . "{$request->input('idade')}";
        }

        return (new Response ($resposta))->header('Content-Type','text/plain');
      }
}
