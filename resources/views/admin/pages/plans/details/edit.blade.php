@extends('adminlte::page')

@section('title', "Edição de Detalhe {$planDetail->name}")

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
            <a href="{{ route('plans.details.edit', ['url' => $plan->url, 'idPlanDetail' => $planDetail->id]) }}">Edição de detalhe {{ $planDetail->name }}</a>
        </li>
    </ol>

    <h1>Edição de detalhe {{ $planDetail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ Form::model($planDetail, ['route' => ['plans.details.update', 'url' => $plan->url, 'idPlanDetail' => $planDetail->id], 'method' => 'put']) }}

                @include('admin.pages.plans.details._partials.form')

            {{ Form::close() }}
        </div>
    </div>
@stop
