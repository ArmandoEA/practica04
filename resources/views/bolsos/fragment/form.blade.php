{!! Form::hidden('id', null, ['class' => 'form-control']) !!}
{!! Form::hidden('slug', null, ['class' => 'form-control']) !!}

<div class="form-group">
  {!! Form::label('name', 'Nombre del bolso') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Descripción del bolso') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('price', 'Precio del bolso') !!}
  {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('photo', 'Foto del bolso') !!}
  {!! Form::file('photo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>
