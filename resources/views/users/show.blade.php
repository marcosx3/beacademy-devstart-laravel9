@extends('template.users')
@section('title','Visualizar Usuario')
@section('content')
<div class="container">
    <h1>Listagem de Usuario</h1>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data Cadastro</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info  text-white m-1">Editar</a><a
                        href="" class="btn btn-danger  text-white">Deletar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection