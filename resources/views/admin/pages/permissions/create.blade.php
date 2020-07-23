@extends('adminlte::page')

@section('title', 'Cadastrar Nova Permissão')

@section('content_header')
    <h1>Cadastrar Nova Permissão</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'permissions.store', 'method' => 'post', 'autocomplete' => 'off']) !!}
                @include('admin.pages.permissions._partials.form')
            {!! Form::close() !!}

        </div>
    </div>
@stop
