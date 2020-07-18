@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do Plano {{ $plan->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    Nome: {{ $plan->name }}
                </li>
                <li>
                    Preço: {{ $plan->price }}
                </li>
                <li>
                    URL: {{ $plan->url }}
                </li>
                <li>
                    Descrição: {{ $plan->description }}
                </li>
            </ul>

            <div>
                <form action="{{ route('plans.destroy', $plan->url) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Excluir plano</button>
                </form>
            </div>
        </div>
    </div>
@stop
