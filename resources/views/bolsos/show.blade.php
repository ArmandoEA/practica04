@extends('layout')
@extends('fragments.profileBar')

@section('content')
<div class="col-sm-8">
  <h2>
    {{ $bolsos->name }}
    <a href="{{ route('bolsos.index') }}" class="btn btn-secondary boton-derecha">Regresar</a>
  @if (!Auth::guest())  <!--Si no es un invitado, mostrar opciones de administrador-->
      <p class="boton-derecha"> ~ </p>
      <a href="{{ route('bolsos.edit', $bolsos->slug) }}" class="btn btn-secondary boton-derecha">Editar</a>
  @endif
  </h2>
  <h5>
    $ {{ $bolsos->price }}
  </h5>
  <p>
    {{ $bolsos->description}}
  </p>
    <img src="{!! $bolsos->photo !!}" class="imagen_show" alt="{!! $bolsos->name !!}" title="{!! $bolsos->name !!}">
    <div>
      <br><br>
    </div>
</div>

<div class="col-sm-4">
  @include('bolsos.fragment.aside')
</div>
@endsection
