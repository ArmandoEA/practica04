@extends('layout')
@extends('fragments.profileBar')

@section('content')
  <div class="col-sm-8">
    @if (Auth::guest()) <!--Si un intriso intenta entrar-->
      <a href="{{ route('bolsos.index') }}" class="btn btn-danger pull-right boton-derecha">Huir</a>
      <div align="center">
        <img src="{{ asset('images/zona_restringida.jpg') }}" alt="fuera de aquí" title="fuera de aquí">
        <br><br>
      </div>
    @else
      <h2>
        Editar Producto
        <a href="{{ route('bolsos.index') }}" class="btn btn-secondary pull-right boton-derecha">Regresar</a>
      </h2>

      @include('bolsos.fragment.error')

      {!! Form::model($bolsos, ['route' => ['bolsos.update', $bolsos], 'method' => 'PUT', 'files' => true]) !!}
        @include('bolsos.fragment.form')
      {!! Form::close() !!}
    @endif
  </div>
  <div class="col-sm-4">
  @if (Auth::guest())
    @include('bolsos.fragment.advertising')
  @else
    @include('bolsos.fragment.aside')
  @endif
  </div>
@endsection
