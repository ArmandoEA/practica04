<html>
<body>
  <h1> MODIFICAR BOLSO </h1>
  <form action="{{route('bolsos.update')}}" method="post">
    {{csrf_field()}}
    @include('bolsos.form');
    <button type="submit" class="btn btn-secondary">Guardar Cambios</button>
  </form>
</body>
</html>
