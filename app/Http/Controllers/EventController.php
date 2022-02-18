<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
    $nome = "João";
    $idade = 20;

    $arr = ["Tenho Fimose", "Coma meu Cuuuuuu", "AAAAAAAAAAAAAAAAAAAAAAAA"];

    $nomes = ["Jarllo", "Karllo", "Romilson", "Pablo"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Desenvolvedor",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

}
