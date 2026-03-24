<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
     //echo "$p1 + $p2 = " . ($p1 + $p2);
        return view('somar', ['p1' => $p1, 'p2' => $p2]);
    }

    function multiplicar(int $p1, int $p2){
        return view('multiplicar', ['p1' => $p1, 'p2' => $p2]);
    }

    function subtrair(int $p1, int $p2){
        return view('subtrair', ['p1' => $p1, 'p2' => $p2]);
    }

    function dividir(int $p1, int $p2){
        return view('dividir', ['p1' => $p1, 'p2' => $p2]);
    }

    function produtos(){
        $produtos = [
            "produto1" => [
                "id" => 1,
                "nome" => "computador",
                "preco" => 100.000
            ],
            "produto2" => [
                "id" => 2,
                "nome" => "mouse",
                "preco" => 50.00
            ],
            "produto3" => [
                "id" => 3,
                "nome" => "teclado",
                "preco" => 120.00
            ],
            "produto4" => [
                "id" => 4,
                "nome" => "monitor",
                "preco" => 900.00
            ],
            "produto5" => [
                "id" => 5,
                "nome" => "notebook",
                "preco" => 3500.00
            ],
            "produto6" => [
                "id" => 6,
                "nome" => "impressora",
                "preco" => 700.00
            ],
            "produto7" => [
                "id" => 7,
                "nome" => "scanner",
                "preco" => 650.00
            ],
            "produto8" => [
                "id" => 8,
                "nome" => "webcam",
                "preco" => 200.00
            ],
            "produto9" => [
                "id" => 9,
                "nome" => "headset",
                "preco" => 180.00
            ],
            "produto10" => [
                "id" => 10,
                "nome" => "microfone",
                "preco" => 300.00
            ],
            "produto11" => [
                "id" => 11,
                "nome" => "caixa de som",
                "preco" => 250.00
            ],
            "produto12" => [
                "id" => 12,
                "nome" => "tablet",
                "preco" => 1500.00
            ],
            "produto13" => [
                "id" => 13,
                "nome" => "smartphone",
                "preco" => 2500.00
            ],
            "produto14" => [
                "id" => 14,
                "nome" => "carregador",
                "preco" => 80.00
            ],
            "produto15" => [
                "id" => 15,
                "nome" => "cabo usb",
                "preco" => 25.00
            ],
            "produto16" => [
                "id" => 16,
                "nome" => "hd externo",
                "preco" => 400.00
            ],
            "produto17" => [
                "id" => 17,
                "nome" => "ssd",
                "preco" => 350.00
            ],
            "produto18" => [
                "id" => 18,
                "nome" => "memória ram",
                "preco" => 280.00
            ],
            "produto19" => [
                "id" => 19,
                "nome" => "placa de vídeo",
                "preco" => 2200.00
            ],
            "produto20" => [
                "id" => 20,
                "nome" => "placa mãe",
                "preco" => 800.00
            ],
            "produto21" => [
                "id" => 21,
                "nome" => "processador",
                "preco" => 1500.00
            ],
            "produto22" => [
                "id" => 22,
                "nome" => "fonte",
                "preco" => 450.00
            ],
            "produto23" => [
                "id" => 23,
                "nome" => "gabinete",
                "preco" => 300.00
            ],
            "produto24" => [
                "id" => 24,
                "nome" => "cooler",
                "preco" => 90.00
            ],
            "produto25" => [
                "id" => 25,
                "nome" => "roteador",
                "preco" => 200.00
            ],
            "produto26" => [
                "id" => 26,
                "nome" => "switch",
                "preco" => 350.00
            ],
            "produto27" => [
                "id" => 27,
                "nome" => "modem",
                "preco" => 180.00
            ],
            "produto28" => [
                "id" => 28,
                "nome" => "controle",
                "preco" => 220.00
            ],
            "produto29" => [
                "id" => 29,
                "nome" => "console",
                "preco" => 3000.00
            ],
            "produto30" => [
                "id" => 30,
                "nome" => "tv",
                "preco" => 2800.00
            ],
            "produto31" => [
                "id" => 31,
                "nome" => "projetor",
                "preco" => 2000.00
            ],
            "produto32" => [
                "id" => 32,
                "nome" => "estabilizador",
                "preco" => 150.00
            ],
            "produto33" => [
                "id" => 33,
                "nome" => "nobreak",
                "preco" => 600.00
            ],
            "produto34" => [
                "id" => 34,
                "nome" => "camera",
                "preco" => 1700.00
            ],
            "produto35" => [
                "id" => 35,
                "nome" => "drone",
                "preco" => 3500.00
            ],
            "produto36" => [
                "id" => 36,
                "nome" => "smartwatch",
                "preco" => 1200.00
            ],
            "produto37" => [
                "id" => 37,
                "nome" => "pulseira fitness",
                "preco" => 300.00
            ],
            "produto38" => [
                "id" => 38,
                "nome" => "carregador portátil",
                "preco" => 150.00
            ],
            "produto39" => [
                "id" => 39,
                "nome" => "luminária",
                "preco" => 100.00
            ],
            "produto40" => [
                "id" => 40,
                "nome" => "mesa digitalizadora",
                "preco" => 900.00
            ],
            "produto41" => [
                "id" => 41,
                "nome" => "cadeira gamer",
                "preco" => 1300.00
            ],
        ];

        return view('compras', ["produtos" => $produtos]); //nome da view
    }

}


