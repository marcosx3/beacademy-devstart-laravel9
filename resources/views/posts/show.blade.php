@extends('template.users')
@section('title', 'Listagem de Posts')

@section('content')
        <h1 class="d-flex justify-content-center mt-3 mb-3">Postagens de Usuario</h1>
    @foreach ($posts as $post)
        <div class="mb-3">
            <label class="form-label"> Identificação N°<br>{{ $post->id }}</label>
            <br>
            <label class="form-label"> Status<br> {{ $post->active ? 'Ativo' : 'Inativo' }}<b></label>
            <br>
            <label class="form-label"> Titulo<br> {{ $post->title }} </label>
            <br>
            <label class="form-label"> Postagem :<br></label>
            <br>
            <textarea class="form-control" rows="3"> Postagem:  {{ $post->post }} </textarea>
            <br>
        </div>
    @endforeach
@endsection
