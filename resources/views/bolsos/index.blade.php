@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      Lista de bolsos
      <a href="{{ route('bolsos.create')}}" class="btn btn-primary pull-right"> Nuevo </a>
    </h2>
    Información extra
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Imagen</th>
          <th colspan="3">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bolsos as $bolso)
          <tr>
            <td>
              <strong> {{ $bolso->name }} </strong>
              {{ $bolso->description }}
            </td>
            <td>{{ $bolso->price }}</td>
            <td>{{ $bolso->photo }}</td>
            <td>
              <a href="{{ route('bolsos.show', $bolso) }}">Ver</a>
            </td>
            <td>
              <a href="{{ route('bolsos.edit', $bolso) }}">Editar</a>
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
    {!! $bolsos->render() !!}
  </div>

  <div class="col-sm-4">
    mensaje
  </div>
@endsection
