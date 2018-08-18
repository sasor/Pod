<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoria') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
    @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
    @if($errors->has('slug'))
        <span class="text-danger">{{ $errors->first('slug') }}</span>
    @endif
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripcion') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    @if($errors->has('slug'))
        <span class="text-danger">{{ $errors->first('body') }}</span>
    @endif
</div>
{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
