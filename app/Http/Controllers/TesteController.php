<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){

        //echo "jesus é totalmente poderoso $p1, $p2";

        //return view('site.teste', compact('p1', 'p2'));  No compact as variaveis são armazenadas nessa função, é a forma mais enxuta 

        return view('site.teste')->with('p1', $p1) ->with('p2', $p2);    //Nessa forma terá que puxar essa função para cada variavel

    }
}
