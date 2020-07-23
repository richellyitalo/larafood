@extends('adminlte::page')

@section('title', "Edição do Perfil plano {$profile->name}")

@section('content_header')
    <h1>Edição do Perfil {{ $profile->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($profile, ['route' => [
                    'profiles.update', $profile->id], 'method' => 'put', 'autocomplete' => 'off'
            ]) !!}

                @include('admin.pages.profiles._partials.form')
            </form>
        </div>
    </div>
@stop
