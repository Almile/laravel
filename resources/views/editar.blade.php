@extends('base')

@section('titulo', 'Laravel')

@section('main')

<div id="container_cadastro">
    <form action="/atualizar/{{ $user->id }}" method="post">
       <div class="fundo">
         <h2 class="text-center mb-4">- Atualizar -</h2>
         @csrf 
         @method('put')
        <label for="nome">Nome: </label>
        <input type="text" name="fnome" value="{{ $user-> nome}}" class="form-control"><br>
        <label for="nome">Email: </label>
        <input type="email" name="femail" value="{{ $user-> email}}" class="form-control"><br>
        <hr>
        <input type="submit" value="Atualizar" class="btn btn-primary btn-block">
       </div>
    </form>
</div>

@endsection
