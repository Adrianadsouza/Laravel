@extends('layouts.app')
@section('content')

<form style="margin-left: 50px; margin-right: 50px" method="get" action="?id={{$contato->id}}">
    <input type="hidden" name="id"  value="{{$contato->id}}">
    <br>
    @if ($sucesso)
    <div class="alert alert-success" role="alert">
        Cambio realizado con éxito!
    </div>
    @endif
    <div class="form-group">
        <label for="nome">Nombre</label>
        <input type="text" class="form-control" value="{{$contato->nome}}" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="{{$contato->email}}" name="email" id="email" aria-describedby="emailHelp" placeholder="Introduzca su E-mail">
    </div>


    <div class="form-group">
        <label for="telefone">Teléfono</label>
        <input type="text" class="form-control" value="{{$contato->telefone}}" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Introduzca su Teléfono">
    </div>


    <div class="form-group">
        <label for="endereco">Dirección</label>
        <input type="text" class="form-control" value="{{$contato->endereco}}" name="endereco" id="endereco" aria-describedby="emailHelp" placeholder="Introduzca su Endereco">
    </div>


    <button type="submit" class="btn btn-primary">Cambiar</button>
    <a href="/contato/list" class="btn btn-primary" role="button" aria-pressed="true" style="">Listado</a>
</form>

@endsection
