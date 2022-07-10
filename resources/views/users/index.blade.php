@extends('template.users')
@section('title','Listagem de Usuarios')
@section('content')
<div class="container">
    <h1>Listagem de Usuarios</h1>
    <a href="{{route('users.create')}}" class="btn btn-dark">Novo Usuário</a>

  
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data Cadastro</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{date('d/m/Y - H:i',strtotime($user->created_at)) }}</td>
                    <td><a href="{{route('users.show',$user->id)}}" class="btn btn-info  text-white">VISUALIZAR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection
    

