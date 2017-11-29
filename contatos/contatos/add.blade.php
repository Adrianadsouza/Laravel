@extends('layouts.app')
@section('content')
<form style="margin-left: 50px; margin-right: 50px" method="post" action="add">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>
    @if ($sucesso)
    <div class="alert alert-success" role="alert">
        Registro realizado con éxito!
    </div>
    @endif
    <div class="form-group">
        <label for="nome">nombre</label>
        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Introduzca su E-mail">
    </div>


    <div class="form-group">
        <label for="telefone">Teléfono</label>
        <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Introduzca su Teléfono">
    </div>


    <div class="form-group">
        <label for="endereco">Endereco</label>
        <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="emailHelp" placeholder="Introduzca su Endereco">
    </div>


    <button type="submit" class="btn btn-primary">Cambiar</button>
    <a href="/contato/list" class="btn btn-primary" role="button" aria-pressed="true" style="">Listado</a>
</form>


@endsection