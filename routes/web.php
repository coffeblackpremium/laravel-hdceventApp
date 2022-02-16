<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

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

});

Route::get('/products', function() {
    return view('products');
});