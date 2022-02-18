@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        @csrf
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="title" name="city" placeholder="Local do Evento">
            </div>
            <div class="form-group">
                <label for="title">O Evento é Privado ?</label>
                <select name="private" id=" private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="criar Evento">
        </form>
    </div>
@endsection