@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      Editar Producto
      <a href="{{ route('bolsos.index') }}" class="btn btn-secondary pull-right boton-derecha">Regresar</a>
    </h2>

    @include('bolsos.fragment.error')

    {!! Form::model($bolsos, ['route' => ['bolsos.update', $bolsos], 'method' => 'PUT', 'files' => true]) !!}
    @include('bolsos.fragment.form')
    {!! Form::close() !!}

  </div>
  <div class="col-sm-4">
    @include('bolsos.fragment.aside')
  </div>
@endsection
