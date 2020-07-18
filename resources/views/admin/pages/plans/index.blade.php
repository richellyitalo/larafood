@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos
        <a href="{{ route('plans.create') }}" class="btn btn-dark">Novo Plano</a>
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" class="form form-inline" method="post">
                @csrf
                <input type="text" name="filter" class="form-control" placeholder="Nome, Descrição"
                    value="{{ $filters['filter'] ?? '' }}" />
                <button class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width="50">Ações</th>
                    </tr>
                </thead>

                @foreach ($plans as $plan)
                    <tr>
                        <td>{{ $plan->name }}</td>
                        <td>R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                        <td>
                        <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop
