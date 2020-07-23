@extends('adminlte::page')

@section('title', "Detalhes do Permissão {$permission->name}")

@section('content_header')
    <h1>Detalhes do Permissão {{ $permission->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $permission->name }}
                </li>
                <li>
                    <strong>Decrição:</strong> {{ $permission->description }}
                </li>
            </ul>

            <div>

                @include('admin.elements.alerts')

                <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir Permissão</button>
                </form>
            </div>
        </div>
    </div>
@stop
