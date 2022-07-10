@extends('template.users')
@section('title')
    Criando Usuario
@endsection

@section('content')

    <h1 class="text-center mt-4"> Cadastro Usuario</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST" class="form-group mt-4" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="image">Selecione uma imagem</label>
            <input type="file" class="form-control form control-md" id="image" name="image">
        </div>

        <button class="btn btn-dark text-white"type="submit">Enviar</button>
    </form>
@endsection
