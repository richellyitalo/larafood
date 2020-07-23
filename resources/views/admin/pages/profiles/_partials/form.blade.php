@include('admin.elements.alerts')

<div class="form-group">
    <label class="control-label">Nome:</label>
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label class="control-label">Descrição:</label>
    {!! Form::text('description', old('description'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <button class="btn btn-dark">{{ isset($profile) ? 'Atualizar' : 'Cadastrar' }}</button>
</div>
