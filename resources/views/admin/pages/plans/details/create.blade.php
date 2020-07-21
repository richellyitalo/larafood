@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('plans.index') }}">Planos</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ route('plans.details', $plan->url) }}">Detalhes do Plano</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ route('plans.details.create', $plan->url) }}">Novo detalhe do Plano {{ $plan->name }}</a>
    </li>
</ol>

<h1>Novo detalhe para o Plano {{ $plan->name }}
    <a href="{{ route('plans.create') }}" class="btn btn-dark">Novo Detalhe <i class="fa fa-plus-circle"></i></a>
</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route' => ['plans.details.store', $plan->url], 'method' => 'post']) }}

                @include('admin.pages.plans.details._partials.form')

            {{ Form::close() }}
        </div>
    </div>
@stop
