<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function paginaPrincipal(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('sobre');
    }

    function contato(){
        return view('contato');
    }

    function desenvolvimentoSistemas(){
        return view('desenvolvimento-sistemas');
    }

    function meioAmbiente(){
        return view('meio-ambiente');
    }

    function administracao(){
        return view('administracao');
    }



    
}


