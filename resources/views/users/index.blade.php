@extends('template.users')
@section('title', 'Listagem de Usuarios')
@section('content')
    <div class="container">
        <h1>Listagem de Usuarios</h1>


        <div class="container">
            <div class="row">
                <div class="col-sm mt-2 mb-5">
                    <a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
                </div>
                <div class="col-sm mt-3 mb-5">
                    <form action="{{route('users.index')}}" method="GET">
                        <div class="input-group">
                            <input type="search" class="form-control roudend" placeholder="Search" name="search">
                            <button type="submit" class="btn  btn-outline-primary">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Postagens</th>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        @if ($user->image)
                            <th>
                                <img src="{{ asset('storage/' . $user->image) }}" width="50px" height="50px"
                                    class="rounded-circle">
                            </th>
                        @else
                            <th><img src="{{ asset('storage/profile/avatar.png') }}" width="50px" height="50px"
                                    class="rounded-circle"></th>
                        @endif
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <td><a href="{{ route('posts.show', $user->id) }}" class="btn btn-outline-dark">Postagens
                                {{ $user->posts->count() }}</a>
                        </td>

                        <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info  text-white">VISUALIZAR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>


    </div>
@endsection
