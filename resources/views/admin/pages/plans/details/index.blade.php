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
    </ol>

    <h1>Detalhes do Plano {{ $plan->name }}
        <a href="{{ route('plans.details.create', $plan->url) }}" class="btn btn-dark">Novo Detalhe <i class="fa fa-plus-circle"></i></a>
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.elements.alerts')

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>

                @foreach ($details as $detail)
                    <tr>
                        <td>{{ $detail->name }}</td>
                        <td>
                            <a href="{{ route('plans.details.edit', [$plan->url, $detail->id]) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('plans.details.show', [$plan->url, $detail->id]) }}" class="btn btn-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-footer">
            {!! $details->links() !!}
        </div>
    </div>
@stop
