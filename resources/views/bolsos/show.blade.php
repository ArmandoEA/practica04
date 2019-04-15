@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      {{ $bolsos->name }}
      <a href="{{ route('bolsos.edit', $bolsos->slug) }}" class="btn btn-secondary pull-right">Editar</a>
      <a href="{{ route('bolsos.index') }}" class="btn btn-secondary pull-right">Regresar</a>
    </h2>
    <h5>
      $ {{ $bolsos->price }}
    </h5>
    <p>
      {{ $bolsos->description}}
    </p>
      {!! $bolsos->photo !!}
  </div>

  <div class="col-sm-4">
    @include('bolsos.fragment.aside')
  </div>
@endsection
