<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (Object) ['nome' => 'Diogo', 'telefone' => '123'],
            (Object) ['nome' => 'pantera', 'telefone' => '123214354322'],
        ];

        return view('professor', compact('professores'));

    }
}
