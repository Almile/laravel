@extends('base')

@section('titulo', 'Laravel')

@section('main')

<div class="d-flex justify-content-center align-items-center">
  <div class="container-custom">
    <div class="row">
      <div class="col-md-6 info-container">
        <h3> Bem Vindo! (nome) </h3><br><br><br>
        <p><strong>Email:</strong> </p>
        <hr>
      </div>
      <div class="col-md-6 img-container">
        <img src="assets/minhaconta.jpg" alt="Dois gatinhos">
      </div>
    </div>
  </div>
</div>

@endsection