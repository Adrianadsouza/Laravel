@extends('layouts.app')
@section('content')
<br>
<a href="/contato/add" class="btn btn-primary btn-lg" role="button" aria-pressed="true" style="float: right; margin-right: 8px">Nuevo contacto</a>
<br>
<br>
<br>

<table>
    <caption> {{count($contatos)}} Contactos registrados</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">E-mail</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contatos as $dados)
        <tr>
            <th scope="row">{{$dados->id}}</th>
            <td>{{$dados->nome}}</td>
            <td>{{$dados->email}}</td>
            <td>{{$dados->telefone}}</td>
            <td>{{$dados->endereco}}</td>
            <td>
                <a href="/contato/edit/{{$dados->id}}" class="btn btn-primary" role="button" aria-pressed="true" style="">Cambiar</a>
                <a href="/contato/delete/{{$dados->id}}" class="btn btn-danger" onclick="return confirm('Desea eliminar el contacto?')" role="button" aria-pressed="true" style="">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection