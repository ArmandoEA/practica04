@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      Nuevo Bolso
      <a href="{{ route('bolsos.index') }}" class="btn btn-secondary pull-right">Regresar</a>
    </h2>

    @include('bolsos.fragment.error')

    {!! Form::open(['route' => 'bolsos.store']) !!}
    @include('bolsos.fragment.form')
    {!! Form::close() !!}

  </div>
  <div class="col-sm-4">
    @include('bolsos.fragment.aside')
  </div>
@endsection
