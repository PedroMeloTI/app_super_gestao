<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2){

        echo "Resultado da soma de $p1 e $p2: ".($p1 + $p2);
     
        // return view('site.teste', ['P1' => $p1, 'P2' => $p2]); // array associativo

        // return view('site.teste', compact('p1', 'p2')); // método compact

        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // método with

    }
}
