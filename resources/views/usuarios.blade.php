@extends('base')

@section('titulo', 'Laravel')

@section('main')

<h1>Usuários do Sistema</h1>

<table class="table table-stripped" style="border: 2px solid #4169E1; ">
<tr>
    <th >Nome: </th>
    <th >Email: </th>
    <th colspan="2">Ações: </th>
</tr>

@foreach($users as $user)
<tr>
<td> {{ $user->nome }} </td>
<td> ({{ $user->email }}) </td>
<td>
    <a href="/edit-usuario/{{ $user->id }}"><button class="btn btn-primary btn-sm">Editar</button></a></td>
<td>
<form action="/del-usuario/{{ $user->id }}" method="post">
        @csrf
        @method('delete')
    <input type="submit" value="Excluir" class="btn2 btn-primary btn-sm">
</form>
</td>
</tr>
@endforeach
</table>

@endsection