<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //os posts tem os requests

    function index(){
        return view('aluno.index');
    }
    function create(Request $dados){
        dd($dados->all());
    }
    function list(){}
    function update(Request $dados){}
    function delete(Request $dados){}
}
