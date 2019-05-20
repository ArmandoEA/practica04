@extends('layout')
@extends('fragments.profileBar')

@if (Auth::guest())
  @section('content')
    <div class="col-sm-8">
      <h2>
        Lista de bolsos
      </h2>
      @include('bolsos.fragment.info')
      <div style="overflow-x:auto;">
      <table class="tabla">

        <tbody class="tabla_cuerpo">
          @foreach($bolsos as $bolso)
            <tr>
              <td>
                <strong> {{ $bolso->name }} </strong>
              </td>
              <td>${{ $bolso->price }}</td>
              <td>
                <!--{{ $bolso->photo }}-->
                <img src="{{ $bolso->photo }}" class="imagen_index" alt="{!! $bolso->name !!}" title="{!! $bolso->name !!}">
              </td>
              <td>
                <a href="{{ route('bolsos.show', $bolso->slug) }}">
                  <button class="btn btn-primary">Detalles</button>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <br>
    </div>
      {!! $bolsos->render() !!} <!--Para que muestre la paginación-->
    </div>

    <div class="col-sm-4">
      @include('bolsos.fragment.advertising')
    </div>
  @endsection

@else
  @section('content')
    <div class="col-sm-8">
      <h2>
        Lista de bolsos
        <a href="{{ route('bolsos.create')}}" class="btn btn-primary boton-derecha"> Nuevo </a>
      </h2>
      @include('bolsos.fragment.info')
      <div style="overflow-x:auto;">
      <table class="tabla">
        <thead class="tabla_cabecera">
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th colspan="3">&nbsp;</th>
          </tr>
        </thead>
        <tbody class="tabla_cuerpo">
          @foreach($bolsos as $bolso)
            <tr>
              <td>
                <strong> {{ $bolso->name }} </strong>
              </td>
              <td>{{ $bolso->description }}</td>
              <td>${{ $bolso->price }}</td>
              <td>
                <!--{{ $bolso->photo }}-->
                <img src="{{ $bolso->photo }}" class="imagen_index" alt="{!! $bolso->name !!}" title="{!! $bolso->name !!}">
              </td>
              <td>
                <a href="{{ route('bolsos.show', $bolso->slug) }}">
                  <button class="btn btn-link">Ver</button>
                </a>
              </td>
              <td>
                <a href="{{ route('bolsos.edit', $bolso->slug) }}">
                  <button class="btn btn-link">Editar</button>
                </a>
              </td>
              <td>
                <form action="{{ route('bolsos.destroy', $bolso) }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-link">borrar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <br>
    </div>
      {!! $bolsos->render() !!} <!--Para que muestre la paginación-->
    </div>

    <div class="col-sm-4">
      @include('bolsos.fragment.aside')
    </div>
  @endsection
@endif
