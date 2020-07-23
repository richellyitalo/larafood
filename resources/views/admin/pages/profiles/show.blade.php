@extends('adminlte::page')

@section('title', "Detalhes do Perfil {$profile->name}")

@section('content_header')
    <h1>Detalhes do Perfil {{ $profile->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $profile->name }}
                </li>
                <li>
                    <strong>Decrição:</strong> {{ $profile->description }}
                </li>
            </ul>

            <div>

                @include('admin.elements.alerts')

                <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir perfil</button>
                </form>
            </div>
        </div>
    </div>
@stop
