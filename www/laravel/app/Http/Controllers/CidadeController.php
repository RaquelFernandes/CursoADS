<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CidadeController extends Controller
{
    private $estados = [
        ['id' => 1, 'estado' => 'DF'],
        ['id' => 2, 'estado' => 'GO'],
    ];
    private $cidades = [
        1 => [['id' => 11, 'cidade' => 'Brasilia']],
        2 => [['id' => 21, 'cidade' => 'Goiania'],
              ['id' => 22, 'cidade' => 'Formosa'],
              ['id' => 23, 'cidade' => 'Valparaiso']],
    ];


    public function index () {
        return view('cidade', ['estados' => $this->estados]);
    }

    public function cidades($idEstado)
    {
        return response()->json($this->cidades[$idEstado]);
        
    }

}
