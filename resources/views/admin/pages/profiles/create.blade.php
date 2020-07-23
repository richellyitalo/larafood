@extends('adminlte::page')

@section('title', 'Cadastrar Novo Perfil')

@section('content_header')
    <h1>Cadastrar Novo Perfil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'profiles.store', 'method' => 'post', 'autocomplete' => 'off']) !!}
                @include('admin.pages.profiles._partials.form')
            {!! Form::close() !!}

        </div>
    </div>
@stop
