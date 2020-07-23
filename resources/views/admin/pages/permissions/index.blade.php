@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('permissions.index') }}">Permissões</a>
        </li>
    </ol>

    <h1>Permissões
        <a href="{{ route('permissions.create') }}" class="btn btn-dark">Nova Permissão <i class="fa fa-plus-circle"></i></a>
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('permissions.search') }}" class="form form-inline" method="get">
                <input type="text" name="filter" class="form-control" placeholder="Nome, Descrição"
                    value="{{ $filters['filter'] ?? '' }}" />
                <button class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">

            @include('admin.elements.alerts')

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>

                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}
            @else
                {!! $permissions->links() !!}
            @endif
        </div>
    </div>
@stop
