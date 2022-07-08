@extends('template.users')
@section('title')
Criando Usuario
@endsection

@section('content')
    <h1 class="text-center"> Cadastro Usuario</h1>
        <form action="{{route('users.store')}}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input  class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" >Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <button class="btn btn-dark text-white"type="submit">Enviar</button>
        </form>
@endsection