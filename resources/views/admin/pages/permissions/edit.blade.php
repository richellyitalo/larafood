@extends('adminlte::page')

@section('title', "Edição do Perfil {$permission->name}")

@section('content_header')
    <h1>Edição do Perfil {{ $permission->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($permission, ['route' => [
                    'permissions.update', $permission->id], 'method' => 'put', 'autocomplete' => 'off'
            ]) !!}

                @include('admin.pages.permissions._partials.form')
            </form>
        </div>
    </div>
@stop
