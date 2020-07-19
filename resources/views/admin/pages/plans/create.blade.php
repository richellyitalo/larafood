@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'plans.store', 'method' => 'post']) !!}
                @include('admin.pages.plans._partials.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop
