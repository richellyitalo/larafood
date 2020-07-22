@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do Plano {{ $plan->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            Nome do detalhe: <strong>{{ $detail->name }}</strong>

            <div>
                {{ Form::open(['route' => [
                    'plans.details.destroy', 'url' => $plan->url, 'idPlanDetail' => $detail->id]
                    ])
                }}
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir detalhe</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
