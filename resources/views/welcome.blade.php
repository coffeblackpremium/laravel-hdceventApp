<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css" >

        <title>HDC event</title>
    </head>

    <body>
        <h1>  Algum Titulo </h1>
        <img src="/img/banner.jpg" alt="banner">
        @if(10 > 5)
            <p> A Condição é Verdadeira </p>
        @endif

        <p>{{$nome}}</p>
        
        @if($nome == "Jose"){
            <p>O Nome é Jose </p>
        }
        @elseif($nome == "João")
            <p> O Nome é {{$nome}} e a idade é {{$idade}} e a sua profissão é {{$profissao}} </p>
        @else
            <p>O Nome não é José </p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p style="text-align: center;">{{$arr[$i]}} indice: {{$i}}</p>
        @endfor
        <hr>
        @foreach($nomes as $nomesDasPessoas)
            <hr>
            <p style="text-align: center;">{{$nomesDasPessoas}}</p>
        @endforeach
        @php
            $name = "João Neto";
            echo $name;
        @endphp

        <!-- Comentário com HTML -->
        {{-- Comentario no blade --}}
        <script src="/js/script.js" ></script>
    </body>
</html>
