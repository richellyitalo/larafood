@extends('adminlte::page')

@section('title', "Atualizar plano {{ $plan->name }}")

@section('content_header')
<h1>Atualizar {{ $plan->name }}</h1>
@stop

    @section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($plan, ['route' => [ 'plans.update', 'url' => $plan->url], 'method' => 'put']) !!}

                @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
    @stop
