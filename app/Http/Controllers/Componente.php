<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes = [
            (Object) ['nome' => 'PWI', 'horario' => '17:50'],
            (Object) ['nome' => 'comilância', 'horario' => '07:00'],
            (Object) ['nome' => 'ervinhas boas', 'horario' => '00:00']
        ];

        return view('componente', compact('componentes'));

    }
}
