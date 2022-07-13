@extends('template.users')
@section('title', 'Listagem de Usuarios')
@section('content')
    <div class="container">
        <div class="card" style="width:18rem;">
            <img src="{{ asset('storage/dash.jpg') }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Bem vindo ao dashboard</h5>
                <p class="card-text">Paylivre #be . <small>Academy</small> <strong>#Laravel</strong></p>
            </div>
        </div>
    </div>
@endsection
