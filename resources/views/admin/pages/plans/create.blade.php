@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        <form action="{{ route('plans.store')}} " method="post" class="form">
                @csrf

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Preço:</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@stop
