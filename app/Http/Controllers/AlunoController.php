<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }
    function adicionar(Request $dados){
        // depurar código -> dd($dados->all());
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
        return view('aluno.index',['sucesso' => 'Aluno cadastrado!']);
    }
    function remover(){}
    function atualizar(){}
    function consultar(){}
}
