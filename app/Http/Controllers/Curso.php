<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show(){
        $cursos = [
            (Object) ['nome' => 'DS', 'horario' => '13:10'],
            (Object) ['nome' => 'Nutrição', 'horario' => '13:00'],
            (Object) ['nome' => 'Meio Ambiente', 'horario' => '23:00']
        ];

        return view('curso', compact('cursos'));

    }
}
