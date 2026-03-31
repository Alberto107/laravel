<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (Object) ['nome' => 'Diogo', 'telefone' => '123', 'email' => 'diogo@hotmail.com'],
            (Object) ['nome' => 'pantera', 'telefone' => '123214354322', 'email' => 'pantheris@gmail.com'],
            (Object) ['nome' => 'Juruoubuan', 'telefone' => '123213543321', 'email' => 'juruabuan@hotmail.com']
        ];

        return view('aluno', compact('alunos'));

    }
}
