@extends('base')

@section('titulo', 'Laravel')

@section('main')

@if ($errors->has('debug_email','debug_password'))
    <div class="alert alert-warning">
        <p><strong>E-mail enviado:</strong> {{ $errors->first('debug_email') }}</p>
        <p><strong>Senha enviada:</strong> {{ $errors->first('debug_password') }}</p>

    </div>
@endif

<form action="login" method="POST">
    @csrf 
    <div class="fundo">
        <div class="text-center mb-4">
            <img src="assets/minhaconta.jpg" alt="">
            <h2 class="text-center mb-4"> - Login - </h2>
        </div>
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Digite seu Email:" required><br>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
        <label for="password">Senha:</label>
        <input type="password" name="password" class="form-control" placeholder="Digite sua senha:" required><br>
        @error('password')
        <span>{{ $message }}</span>
        @enderror
        <hr>
        <input type="submit" value="Entrar" class="btn btn-primary btn-block">
    </div>
</form>


@endsection
